<?php

/**
 * service module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage service
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseServiceGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array(  '_list' =>   array(    'label' => 'volver',  ),);
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%ser_icono%% - %%ser_nombre%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Servicios';
  }

  public function getEditTitle()
  {
    return 'Edicion de %%ser_nombre%%';
  }

  public function getNewTitle()
  {
    return 'Alta de un nuevo servicio';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'ser_nombre',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'ser_icono',  2 => 'ser_nombre',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ser_icono' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Icono',  'attributes' =>   array(    'class' => 'form-control',  ),),
      'ser_nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre',  'attributes' =>   array(    'class' => 'form-control',  ),),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'ser_icono' => array(),
      'ser_nombre' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'ser_icono' => array(),
      'ser_nombre' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'ser_icono' => array(),
      'ser_nombre' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'ser_icono' => array(),
      'ser_nombre' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'ser_icono' => array(),
      'ser_nombre' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ServiciosForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ServiciosFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 5;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
