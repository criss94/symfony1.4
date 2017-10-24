<?php

require_once dirname(__FILE__).'/../lib/productGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/productGeneratorHelper.class.php';

/**
 * product actions.
 *
 * @package    repaso
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends autoProductActions
{
    /*public function executeUploadFile(){
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

        if ($form->isValid()) {
            $file = $form->getValue('prd_photo');
            $filename = 'attachment_'.sha1($file->getOriginalName());
            $extension = $file->getExtension($file->getOriginalExtension());
            $file->save(sfConfig::get('sf_upload_dir') . '/' . date('Ym') . '/' . $filename . $extension);
        }
    }*/
    
}
