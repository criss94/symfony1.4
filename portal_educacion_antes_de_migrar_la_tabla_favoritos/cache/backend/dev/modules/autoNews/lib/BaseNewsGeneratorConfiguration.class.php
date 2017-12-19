<?php

/**
 * news module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage news
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseNewsGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%id%% - %%not_nombre%% - %%not_link%% - %%not_imagen%% - %%not_activo%% - %%not_inicio_pub%% - %%not_fin_pub%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Noticias';
  }

  public function getEditTitle()
  {
    return 'Edicion de %%not_nombre%%';
  }

  public function getNewTitle()
  {
    return 'Alta de una nueva Noticia';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'not_nombre',  1 => 'not_activo',);
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
    return array(  0 => 'id',  1 => 'not_nombre',  2 => 'not_link',  3 => 'not_imagen',  4 => 'not_activo',  5 => 'not_inicio_pub',  6 => 'not_fin_pub',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'not_nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Nombre',  'attributes' =>   array(    'class' => 'form-control',  ),),
      'not_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'URL',  'attributes' =>   array(    'class' => 'form-control',  ),),
      'not_imagen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Imagen',  'attributes' =>   array(    'class' => 'img-responsive',  ),),
      'not_activo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Activo',  'attributes' =>   array(    'class' => 'form-control',  ),),
      'not_inicio_pub' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Fecha de publicación',  'attributes' =>   array(    'class' => 'form-control',  ),),
      'not_fin_pub' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Vencimiento de la publicación',  'attributes' =>   array(    'class' => 'form-control',  ),),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'not_nombre' => array(),
      'not_link' => array(),
      'not_imagen' => array(),
      'not_activo' => array(),
      'not_inicio_pub' => array(),
      'not_fin_pub' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'not_nombre' => array(),
      'not_link' => array(),
      'not_imagen' => array(),
      'not_activo' => array(),
      'not_inicio_pub' => array(),
      'not_fin_pub' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'not_nombre' => array(),
      'not_link' => array(),
      'not_imagen' => array(),
      'not_activo' => array(),
      'not_inicio_pub' => array(),
      'not_fin_pub' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'not_nombre' => array(),
      'not_link' => array(),
      'not_imagen' => array(),
      'not_activo' => array(),
      'not_inicio_pub' => array(),
      'not_fin_pub' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'not_nombre' => array(),
      'not_link' => array(),
      'not_imagen' => array(),
      'not_activo' => array(),
      'not_inicio_pub' => array(),
      'not_fin_pub' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'NoticiasForm';
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
    return 'NoticiasFormFilter';
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
