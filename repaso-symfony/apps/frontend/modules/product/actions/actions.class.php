<?php

/**
 * product actions.
 *
 * @package    repaso
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //maxima cantidad a mostrar para el paginado
    $max_per_page = 5;
    $query = Doctrine::getTable('Products')->createQuery('p');
    $this->pager = new sfDoctrinePager('Products', $max_per_page);
    $this->pager->setQuery($query);
    //parametro obtenido desde la uri ?page=1 activo en la pagina 1
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
      
    $this->categories = Doctrine_Core::getTable('Categories')
      ->createQuery('c')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->products = Doctrine_Core::getTable('Products')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->products);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($products = Doctrine_Core::getTable('Products')->find(array($request->getParameter('id'))), sprintf('Object products does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductsForm($products);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($products = Doctrine_Core::getTable('Products')->find(array($request->getParameter('id'))), sprintf('Object products does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductsForm($products);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($products = Doctrine_Core::getTable('Products')->find(array($request->getParameter('id'))), sprintf('Object products does not exist (%s).', $request->getParameter('id')));
    $products->delete();

    $this->redirect('product/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
        /*$form = $request->getFiles($form->getName());
        //echo '<pre>';
            //var_dump($form['prd_photo']['name']);
        //echo '</pre>';
        $uploadDir = 'uploads/assets/';
        $prd_photo = $form['prd_photo']['name'];
        $prd_photoTMP = $form['prd_photo']['tmp_name'];
        move_uploaded_file($prd_photoTMP, $uploadDir.$prd_photo);
        //var_dump($prd_photoTMP);
        
        //$filename = 'prd_photo_'.sha1($file->getOriginalName());
        //$extension = $file->getExtension($file->getOriginalExtension());
        //$file->save(sfConfig::get('sf_upload_dir') . '/' . $filename . $extension);*/
        $products = $form->save();

        $this->redirect('product/edit?id='.$products->getId());
    }
  }
  
  public function executeSearch(sfWebRequest $request){
    //$this->forwardUnless($query = $request->getParameter('query'), 'product', 'index');
    //$this->products = Doctrine_Core::getTable('Products') ->getForLuceneQuery($query);
      $query = trim($request->getParameter('query'));
      $cat = trim($request->getParameter('cat'));
      //echo $query;
      $this->products = Doctrine::getTable('Products')
                        ->createQuery('p')
                        ->where('p.prd_name LIKE ?','%'.$query.'%')
                        ->execute();
      
                        if($cat != 0){
                            $this->products = Doctrine::getTable('Products')
                                    ->createQuery('p')
                                    ->where('p.prd_name LIKE ?','%'.$query.'%')
                                    ->andWhere('p.cat_id = ?',$cat)
                                    ->execute();
                        }
   
      $this->categories = Doctrine_Core::getTable('Categories')
                          ->createQuery('c')
                          ->execute();             
      $this->setTemplate('result');
  }
  
}
