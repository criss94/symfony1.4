<?php

class ProductsForm extends BaseProductsForm
{
  public function configure()
  {
        //quito los campos que no quiero que se muestren en  las vistas, por default te muestra todos los campos de de tu tabla
        unset(
           $this['prd_slug'], $this['slug'], $this['prd_created']
        );
        
        $this->setWidget('prd_photo', new sfWidgetFormInputFileEditable(array(
          'file_src' => '/uploads/assets/'.$this->getObject()->getPrdPhoto(),
          'is_image' => true,
          //'edit_mode' => true,
          //'with_delete' => (boolean) $this->getObject()->getPrdPhoto(),
          //esta linea hace que no nos muestre la imagen cuando se esta dando de alta un producto
          'edit_mode' => !$this->isNew() && $this->getObject()->getPrdPhoto(),
        )));

        //$this->widgetSchema['prd_photo'] = new sfWidgetFormInputFile();
        
        //seteo los labels por un nombre mas legible en los form
        $this->widgetSchema->setLabels(array(
            'prd_name'=>'Name:',
            'prd_description'=>'Description:',
            'prd_price'=>'Price:',
            'cat_id'=>'Category:',
            'prd_photo'=>'Photo:',
        ));
        
        //nos permite subir las imagenes cuando se da de alta un nuevo producto
        $this->validatorSchema['prd_photo'] = new sfValidatorFile(array(
            'required'   => false,
            'path'       => sfConfig::get('sf_upload_dir') . "/assets",
            //'mime_types' => array('application/jpg')
	), array('mime_types' => 'El formato del archivo ingresado no esta permitido, suba un jpg'));
        
        //seteo los mensajes de error por default(solo 'required') del form de editar
        $this->setValidators(array(
            //con required false, ocultamos el mensaje por default, no se muestran en la vista
            'id' => new sfValidatorString(array('required'=>false)),
            //personalizamnos los mensajes de error para todos estos campos
            'prd_name' => new sfValidatorString(array(), array('required' => 'El campo nombre es obligatorio')),
            'prd_description' => new sfValidatorString(array(), array('required' => 'El campo descripcion es obligatorio')),
            'prd_price' => new sfValidatorString(array(), array('required' => 'El campo precio es obligatorio')),
            'cat_id' => new sfValidatorString(array()),
            'prd_photo' => new sfValidatorString(array('required'=>false)),
        ));
        
  }
}
