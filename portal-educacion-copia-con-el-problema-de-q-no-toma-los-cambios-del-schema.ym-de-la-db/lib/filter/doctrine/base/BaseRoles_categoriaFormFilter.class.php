<?php

/**
 * Roles_categoria filter form base class.
 *
 * @package    portal-educacion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRoles_categoriaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rol_user_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'rol_cat_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categorias'), 'add_empty' => true)),
      'rol_group_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardGroup'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'rol_user_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'rol_cat_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categorias'), 'column' => 'id')),
      'rol_group_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardGroup'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('roles_categoria_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Roles_categoria';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'rol_user_id'  => 'ForeignKey',
      'rol_cat_id'   => 'ForeignKey',
      'rol_group_id' => 'ForeignKey',
    );
  }
}
