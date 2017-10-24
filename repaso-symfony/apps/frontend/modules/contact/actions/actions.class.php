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
        //retorno solo la vista
        $this->formContact = new ContactForm();
    }

    public function executeSendMail(sfWebRequest $request){
        $name = $request->getParameter('fullName');
        $email = $request->getParameter('email');
        $message = $request->getParameter('message');
        
        /*$mensaje = $this->getMailer()
            ->compose($mail, 'cristianveizaga11@gmail.com', 'Mensaje de prueba', $message);
        $this->getMailer()->send($mensaje);*/
        
        /*$this->getMailer()->composeAndSend(
          $mail,
          'cristianveizaga11@gmail.com',
          'Asunto de prueba',
          'Cuerpo del mensaje'
        );*/
        
        //$this->getMailer()->send($mensaje);
        
        /*$msj = Swift_Message::newInstance()
            ->setFrom($email)
            ->setTo('cristianveizaga11@gmail.com')
            ->setSubject('Prueba de contacto...')
            ->setBody('Nombre: '.$name.' - '.$message);
        
        $this->getMailer()->send($msj);
        //mensaje flash que se muestra en la vista para q el usuario sepa q la consulta fue enviada
        $this->getUser()->setFlash('notice', sprintf('Tu consulta fue enviada, en breve te contactaremos...'));
        $this->redirect('contact');*/
        
        //otra forma
        
        $msj = $this->getMailer()->compose();
        $msj->setSubject('Prueba de email de contacto en Symfony');
        $msj->setTo('cristianveizaga11@gmail.com');
        $msj->setFrom(array($email => $name));

        $msj->setBody($message);

        $this->getMailer()->send($msj);
        //mensaje flash que se muestra en la vista para q el usuario sepa q la consulta fue enviada
        $this->getUser()->setFlash('notice', sprintf('Tu consulta fue enviada, en breve te contactaremos...'));
        $this->redirect('contact');

  }
  
}
