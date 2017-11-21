<?php

/**
 * Noticias form.
 *
 * @package    portal-educacion
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NoticiasForm extends BaseNoticiasForm
{
  public function configure()
  {
  	//seteo los mensajes de error por default ('required') del form de alta y editar
    $this->setValidators(array(
        //con required false, ocultamos el mensaje por default, no se muestran en la vista
        'id' => new sfValidatorInteger(array('required' => false)),
        //personalizamnos los mensajes de error para todos estos campos del form de alta de botones
        'not_nombre' => new sfValidatorString(array(), array('required' => 'El nombre es obligatorio')),
        'not_link' => new sfValidatorString(array(), array('required' => 'La URL es obligatorio')),
        'not_imagen' => new sfValidatorFile(),
        'not_activo' => new sfValidatorInteger(array(), array('required' => "El campo activo es obligatorio, ingresa '1' para activarlo o '0' para desactivarlo")),
    ));
        
    //cambiamos el input text q lo crea por default el generador para el campo imagen, por un input file
    $this->setWidget('not_imagen', new sfWidgetFormInputFileEditable(array(
      'file_src'    => '/uploads/news/'.$this->getObject()->getNotImagen(),
      'edit_mode'   => !$this->isNew() && $this->getObject()->getNotImagen(),
      'is_image'    => true,
      //este em muestra un checkbox con la opcion de tildar para eliminar la imagen, pero antes debe tener un campo en la DB btn_imagen_delete segun sea su campo
      'with_delete' => false
    )));

    //este nos sube la imagen al directorio especificado en path
    $this->setValidator('not_imagen', new sfValidatorFile(array(
      'mime_types' => 'web_images',
      'path' => sfConfig::get('sf_upload_dir').'/news',
      'required' => false
    )));

  }
}
