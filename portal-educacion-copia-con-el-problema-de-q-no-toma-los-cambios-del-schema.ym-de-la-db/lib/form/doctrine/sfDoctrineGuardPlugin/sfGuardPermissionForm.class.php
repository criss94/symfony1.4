<?php

/**
 * sfGuardPermission form.
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardPermissionForm extends PluginsfGuardPermissionForm
{
  public function configure()
  {     
      $this->widgetSchema->setLabels(array(
          'name' => 'Nombre',
          'description' => 'Descripcion',
          #'per_cat_id' => 'Categorias'
      ));
  }
}
