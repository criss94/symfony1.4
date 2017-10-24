<?php

/**
 * category actions.
 *
 * @package    repaso
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
      $this->categories = Doctrine_Core::getTable('categories')->findAll();
  }
  
  public function executeShow(sfWebRequest $request){
    $this->cat = $this->getRoute()->getObject();
  }
  
}
