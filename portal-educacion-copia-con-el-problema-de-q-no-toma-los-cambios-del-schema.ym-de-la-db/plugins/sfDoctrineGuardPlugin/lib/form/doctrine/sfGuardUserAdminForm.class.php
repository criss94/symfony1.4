<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardUserAdminForm extends BasesfGuardUserAdminForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
      //oculto campos de la vista del form
      unset(
        $this['is_super_admin']
      );
      
      //modifico los campos select del form
      /*$this->setWidgets(array(
          'name' => new sfWidgetFormChoice(array()),
          'per_cat_id' => new sfWidgetFormChoice(array())
      ));*/
      
      $this->widgetSchema['per_cat_id'] = new sfWidgetFormDoctrineChoice(array(
        'model' => 'Categorias',
        'multiple' => false,
        'expanded' => false,
        'add_empty' => true,
        'order_by' => array('cat_name', 'asc')
      ));
      
  }
}
