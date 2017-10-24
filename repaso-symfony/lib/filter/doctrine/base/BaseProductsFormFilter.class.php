<?php

/**
 * Products filter form base class.
 *
 * @package    repaso
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'prd_slug'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prd_name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prd_description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prd_price'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cat_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categories'), 'add_empty' => true)),
      'prd_created'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prd_photo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'prd_slug'        => new sfValidatorPass(array('required' => false)),
      'prd_name'        => new sfValidatorPass(array('required' => false)),
      'prd_description' => new sfValidatorPass(array('required' => false)),
      'prd_price'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cat_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categories'), 'column' => 'id')),
      'prd_created'     => new sfValidatorPass(array('required' => false)),
      'prd_photo'       => new sfValidatorPass(array('required' => false)),
      'slug'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('products_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Products';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'prd_slug'        => 'Text',
      'prd_name'        => 'Text',
      'prd_description' => 'Text',
      'prd_price'       => 'Number',
      'cat_id'          => 'ForeignKey',
      'prd_created'     => 'Text',
      'prd_photo'       => 'Text',
      'slug'            => 'Text',
    );
  }
}
