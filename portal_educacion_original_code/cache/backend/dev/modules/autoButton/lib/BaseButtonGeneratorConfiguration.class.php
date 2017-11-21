<?php

/**
 * button module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage button
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseButtonGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array(  '_list' =>   array(    'label' => 'volver al listado',  ),);
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
    return '%%id%% - %%btn_nombre%% - %%btn_link%% - %%btn_imagen%% - %%btn_activo%% - %%btn_cat_id%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Botones';
  }

  public function getEditTitle()
  {
    return 'Edicion de %%btn_nombre%%';
  }

  public function getNewTitle()
  {
    return 'Alta de un nuevo Boton';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'btn_nombre',  1 => 'btn_activo',  2 => 'btn_cat_id',);
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
    return array(  0 => 'id',  1 => 'btn_nombre',  2 => 'btn_link',  3 => 'btn_imagen',  4 => 'btn_activo',  5 => 'btn_cat_id',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'btn_nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre',  'attributes' =>   array(    'class' => 'form-control',  ),),
      'btn_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'URL',  'attributes' =>   array(    'class' => 'form-control',  ),),
      'btn_imagen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Imagen',  'attributes' =>   array(    'class' => 'img-responsive',  ),),
      'btn_activo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Activo',  'attributes' =>   array(    'class' => 'form-control',  ),),
      'btn_cat_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',  'label' => 'Categorias',  'attributes' =>   array(    'class' => 'form-control',  ),),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'btn_nombre' => array(),
      'btn_link' => array(),
      'btn_imagen' => array(),
      'btn_activo' => array(),
      'btn_cat_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'btn_nombre' => array(),
      'btn_link' => array(),
      'btn_imagen' => array(),
      'btn_activo' => array(),
      'btn_cat_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'btn_nombre' => array(),
      'btn_link' => array(),
      'btn_imagen' => array(),
      'btn_activo' => array(),
      'btn_cat_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'btn_nombre' => array(),
      'btn_link' => array(),
      'btn_imagen' => array(),
      'btn_activo' => array(),
      'btn_cat_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'btn_nombre' => array(),
      'btn_link' => array(),
      'btn_imagen' => array(),
      'btn_activo' => array(),
      'btn_cat_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'BotonesForm';
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
    return 'BotonesFormFilter';
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
