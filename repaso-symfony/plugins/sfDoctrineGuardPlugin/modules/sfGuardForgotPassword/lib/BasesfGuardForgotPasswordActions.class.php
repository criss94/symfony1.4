<?php

/**
 * Base actions for the sfGuardForgotPasswordPlugin sfGuardForgotPassword module.
 * 
 * @package     sfGuardForgotPasswordPlugin
 * @subpackage  sfGuardForgotPassword
 * @author      Your name here
 * @version     SVN: $Id: BaseActions.class.php 12534 2008-11-01 13:38:27Z Kris.Wallsmith $
 */
abstract class BasesfGuardForgotPasswordActions extends sfActions
{
  public function preExecute(){
    if ($this->getUser()->isAuthenticated()){
      $this->redirect('@homepage');
    }
  }

  public function executeIndex($request){
    $this->form = new sfGuardRequestForgotPasswordForm();

    if ($request->isMethod('post')){
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid()){
        $this->user = $this->form->user;
        $this->_deleteOldUserForgotPasswordRecords();

        $forgotPassword = new sfGuardForgotPassword();
        $forgotPassword->user_id = $this->form->user->id;
        $forgotPassword->unique_key = md5(rand() + time());
        $forgotPassword->expires_at = new Doctrine_Expression('NOW()');
        $forgotPassword->save();

        $message = Swift_Message::newInstance()
          ->setFrom(sfConfig::get('app_sf_guard_plugin_default_from_email', 'from@noreply.com'))
          ->setTo($this->form->user->email_address)
          ->setSubject('Forgot Password Request for '.$this->form->user->username)
          ->setBody($this->getPartial('sfGuardForgotPassword/send_request', array('user' => $this->form->user, 'forgot_password' => $forgotPassword)))
          ->setContentType('text/html');

        $this->getMailer()->send($message);

        $this->getUser()->setFlash('notice', 'Check your e-mail! You should receive something shortly!');
        $this->redirect('@sf_guard_signin');
      } else {
        $this->getUser()->setFlash('error', 'Invalid e-mail address!');
      }
    }
  }

  public function executeChange($request)
  {
    $this->forgotPassword = $this->getRoute()->getObject();
    $this->user = $this->forgotPassword->User;
    $this->form = new sfGuardChangeUserPasswordForm($this->user);

    if ($request->isMethod('post')){
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid()){
        $this->form->save();

        $this->_deleteOldUserForgotPasswordRecords();

        $message = Swift_Message::newInstance()
          ->setFrom(sfConfig::get('app_sf_guard_plugin_default_from_email', 'from@noreply.com'))
          ->setTo($this->user->email_address)
          ->setSubject('New Password for '.$this->user->username)
          ->setBody($this->getPartial('sfGuardForgotPassword/new_password', array('user' => $this->user, 'password' => $request['sf_guard_user']['password'])))
        ;

        $this->getMailer()->send($message);

        $this->getUser()->setFlash('notice', 'Password updated successfully!');
        $this->redirect('@sf_guard_signin');
      }
    }
  }

  private function _deleteOldUserForgotPasswordRecords(){
    Doctrine_Core::getTable('sfGuardForgotPassword')
      ->createQuery('p')
      ->delete()
      ->where('p.user_id = ?', $this->user->id)
      ->execute();
  }
  
  /////////////////////////// otra forma /////////////////////////////////
  //codigo de la doc
  /*
  public function preExecute(){
    if ($this->getUser()->isAuthenticated()){
       $this->redirect('@homepage');
    }
  }
  
  public function executeIndex($request){
    $class = sfConfig::get('app_sf_guard_plugin_request_forgot_password_form', 'sfGuardRequestForgotPasswordForm');
    $this->form = new $class();

    if ($request->isMethod('post')){
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid()){
        $this->user = Doctrine_Core::getTable('sfGuardUser')
          ->retrieveByUsernameOrEmailAddress($this->form->getValue('email_address'));

        Doctrine_Core::getTable('sfGuardForgotPassword')
          ->deleteByUser($this->user);

        $forgotPassword = new sfGuardForgotPassword();
        $forgotPassword->user_id = $this->user->id;
        $forgotPassword->unique_key = md5(rand() + time());
        $forgotPassword->expires_at = new Doctrine_Expression('NOW()');
        $forgotPassword->save();

        $this->sendRequestMail($this->user, $forgotPassword);

        $this->getUser()->setFlash('notice', 'Check your e-mail! You should receive something shortly!');

        $this->redirect(sfConfig::get('app_sf_guard_plugin_password_request_url', '@sf_guard_signin'));
      }
    }
  }

  protected function sendRequestMail($user, $forgotPassword){
    $i18n = $this->getContext()->getI18N();

    $message = $this->getMailer()->compose(
      sfConfig::get('app_sf_guard_plugin_default_from_email', 'from@noreply.com'),
    $user->email_address,
    $i18n->__('Forgot Password Request for %name%', array('%name%' => $user->username), 'sf_guard'),
      $this->getPartial('sfGuardForgotPassword/send_request', array('user' => $user, 'forgot_password' => $forgotPassword))
    )->setContentType('text/html');

    $this->getMailer()->send($message);
  }
	
  public function executeChange($request){
    $this->forgotPassword = $this->getRoute()->getObject();
    $this->user = $this->forgotPassword->User;
    $this->form = new sfGuardChangeUserPasswordForm($this->user);

    if ($request->isMethod('post'))
   {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid())
      {
      $this->form->save();

      $this->forgotPassword->delete();

       $this->sendChangeMail($this->user, $request['sf_guard_user']['password']);

       $this->getUser()->setFlash('notice', 'Password updated successfully!');

       $this->redirect(sfConfig::get('app_sf_guard_plugin_password_change_url', '@sf_guard_signin'));
      }
    }
  }


  protected function sendChangeMail($user, $password)
  {
    $i18n = $this->getContext()->getI18N();

    $message = $this->getMailer()->compose(
                sfConfig::get('app_sf_guard_plugin_default_from_email', 'from@noreply.com'),
    $user->email_address,
    $i18n->__('New Password for %name%', array('%name%' => $user->username) , 'sf_guard'),
    $this->getPartial('sfGuardForgotPassword/new_password', array('user' => $user, 'password' => $password))
                      )->setContentType('text/html');

    $this->getMailer()->send($message);
  }
  */
  ////////////////////////////////////////////////////////////////////////
  
  
}