<?php

class ContactForm extends sfForm
{
    public function configure()
    {
      $this->setWidgets(array(
        'fullName'  => new sfWidgetFormInput(array(), array('class' => 'form-control', 'placeholder' => 'Ingresa tu nombre completo', 'required' => true)),
        'email'   => new sfWidgetFormInput(array(), array('class' => 'form-control', 'placeholder' => 'Ingresa tu correo electronico', 'required' => true)),
        'message' => new sfWidgetFormTextarea(array(), array('class' => 'form-control mb-3', 'placeholder' => 'Dejanos tu mensaje', 'required' => true)),
      ));
      
      //$this->widgetSchema->setNameFormat('contacto[%s]');

      //esto no valida si no guardamos la data en la DB
      $this->setValidators(array(
        'fullName'  => new sfValidatorString(array('required' => true),array('required'=>'El nombre es obligatorio')),
        'email'   => new sfValidatorEmail(array(), array('required'=>'El email es obligatorio')),
        'message' => new sfValidatorString(array('min_length' => 4),array('required'=>'El mensaje es obligatorio')),
      ));
      
        $this->widgetSchema->setLabels(array(
          'fullName'  => ' ',
          'email'   => ' ',
          'message' => ' ',
        ));
        
        //$this->widgetSchema->setLabel('email', ' ');


    }
}