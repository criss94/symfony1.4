<?php

/**
 * Products form base class.
 *
 * @method Products getObject() Returns the current form's model object
 *
 * @package    repaso
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'prd_slug'        => new sfWidgetFormInputText(),
      'prd_name'        => new sfWidgetFormInputText(),
      'prd_description' => new sfWidgetFormTextarea(),
      'prd_price'       => new sfWidgetFormInputText(),
      'cat_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categories'), 'add_empty' => false)),
      'prd_created'     => new sfWidgetFormInputText(),
      'prd_photo'       => new sfWidgetFormInputText(),
      'slug'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'prd_slug'        => new sfValidatorString(array('max_length' => 255)),
      'prd_name'        => new sfValidatorString(array('max_length' => 255)),
      'prd_description' => new sfValidatorString(array('max_length' => 10000)),
      'prd_price'       => new sfValidatorInteger(),
      'cat_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categories'))),
      'prd_created'     => new sfValidatorString(array('max_length' => 100)),
      'prd_photo'       => new sfValidatorString(array('max_length' => 255)),
      'slug'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
        new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Products', 'column' => array('prd_name'))),
        new sfValidatorDoctrineUnique(array('model' => 'Products', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('products[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Products';
  }

}
