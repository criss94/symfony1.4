<?php

/**
 * sfGuardGroup form.
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardGroupForm extends PluginsfGuardGroupForm
{
  public function configure()
  {

	$this->setValidators(array(
        'id' => new sfValidatorInteger(array('required' => false)),
        'name' => new sfValidatorString(array(), array('required' => 'El Nombre es obligatorio')),
        'description' => new sfValidatorString(array(), array('required' => 'La descripción es obligatorio')),
        'users_list' => new sfValidatorString(array(), array('required' => 'Elija uno o varios usuarios')),
        'permissions_list' => new sfValidatorString(array(), array('required' => 'Elija uno o varios permisos')),
        'categorias_list' => new sfValidatorString(array(), array('required' => 'Elija uno o varias categorias')),
        //'created_at' => new sfValidatorDateTime(array('required'=>false)),
        //'updated_at' => new sfValidatorDateTime(),
    ));

  }
}
