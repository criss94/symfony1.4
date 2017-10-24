<?php

/**
 * sfGuardFormSignin for sfGuardAuth signin action
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardFormSignin.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardFormSignin extends BasesfGuardFormSignin
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    $this->setWidgets(array(
      'username'  => new sfWidgetFormInputText(array(), array('class' => 'form-control mb-2 col-xl-12', 'placeholder' => 'Ingresa tu nombre de usuario')),
      'password'   => new sfWidgetFormInputPassword(array(), array('class' => 'form-control mb-2', 'placeholder' => 'Ingresa tu contraseña')),
      //'remember'   => new sfWidgetFormInputCheckbox(array(), array()),
      //'_csrf_token'   => new sfWidgetFormInputHidden(array(), array('value'=>15)),
    ));

    //$this->widgetSchema->setNameFormat('contacto[%s]');
    
    $this->setValidators(array(
      'username'  => new sfValidatorString(array(), array('required'=>'El nombre de usuario es obligatorio')),
      'password'   => new sfValidatorString(array(), array('required'=>'La contraseña es obligatoria')),
    ));
      
    $this->widgetSchema->setLabels(array(
      'username'  => ' ',
      'password'   => ' ',
      //'remember'   => 'Recordarme ',
    ));
    
  }
}
