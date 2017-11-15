<?php

/**
 * BaseCategorias
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cat_nombre
 * @property integer $cat_posicion
 * @property Doctrine_Collection $Botones
 * @property Doctrine_Collection $sfGuardGroup
 * @property Doctrine_Collection $rol_cat_id
 * 
 * @method string              getCatNombre()    Returns the current record's "cat_nombre" value
 * @method integer             getCatPosicion()  Returns the current record's "cat_posicion" value
 * @method Doctrine_Collection getBotones()      Returns the current record's "Botones" collection
 * @method Doctrine_Collection getSfGuardGroup() Returns the current record's "sfGuardGroup" collection
 * @method Doctrine_Collection getRolCatId()     Returns the current record's "rol_cat_id" collection
 * @method Categorias          setCatNombre()    Sets the current record's "cat_nombre" value
 * @method Categorias          setCatPosicion()  Sets the current record's "cat_posicion" value
 * @method Categorias          setBotones()      Sets the current record's "Botones" collection
 * @method Categorias          setSfGuardGroup() Sets the current record's "sfGuardGroup" collection
 * @method Categorias          setRolCatId()     Sets the current record's "rol_cat_id" collection
 * 
 * @package    portal-educacion
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategorias extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('categorias');
        $this->hasColumn('cat_nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('cat_posicion', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Botones', array(
             'local' => 'id',
             'foreign' => 'btn_cat_id'));

        $this->hasMany('sfGuardGroup', array(
             'refClass' => 'RolesCategoria',
             'local' => 'rol_cat_id',
             'foreign' => 'rol_group_id'));

        $this->hasMany('RolesCategoria as rol_cat_id', array(
             'local' => 'id',
             'foreign' => 'rol_cat_id'));
    }
}