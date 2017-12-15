<?php

/**
 * Noticias filter form base class.
 *
 * @package    portal-educacion
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNoticiasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'not_nombre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'not_link'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'not_imagen'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'not_activo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'not_inicio_pub' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'not_fin_pub'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'not_nombre'     => new sfValidatorPass(array('required' => false)),
      'not_link'       => new sfValidatorPass(array('required' => false)),
      'not_imagen'     => new sfValidatorPass(array('required' => false)),
      'not_activo'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'not_inicio_pub' => new sfValidatorPass(array('required' => false)),
      'not_fin_pub'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('noticias_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Noticias';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'not_nombre'     => 'Text',
      'not_link'       => 'Text',
      'not_imagen'     => 'Text',
      'not_activo'     => 'Number',
      'not_inicio_pub' => 'Text',
      'not_fin_pub'    => 'Text',
    );
  }
}
