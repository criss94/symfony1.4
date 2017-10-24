<?php

/**
 * contact actions.
 *
 * @package    repaso
 * @subpackage contact
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{
    /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeIndex(sfWebRequest $request)
    {

    }

    public function executeSendMail(sfWebRequest $request){
        //$name = $request->getParameter('name');
        /*$mail = $request->getParameter('email');
        $message = $request->getParameter('message');

        $mensaje = Swift_Message::newInstance()
            ->setFrom($mail)
            ->setTo('cristianveizaga11@gmail.com')
            ->setSubject('Prueba contacto')
            ->setBody($message);

        $this->getMailer()->send($mensaje);*/
        
        //otra forma
        $message = $this->getMailer()->compose();
        $message->setSubject($params['subject']);
        $message->setTo($params['to']);
        $message->setFrom($params['from']);

        //$html = $this->getPartial('mymodule/myTemplateHtml',$params);
        $message->setBody($html, 'text/html');
        //$text = $this->getPartial('mymodule/myTemplateTxt',$params);
        $message->addPart($text, 'text/plain');    

        $this->getMailer()->send($message);


  }
  
}
