<?php

class productActions extends sfActions
{

    public function executeIndex(sfWebRequest $request)
    {
      //$this->forward('default', 'module');
       $this->products = Doctrine_Core::getTable('products')->findAll();
       //$this->products = $this->getProducts();
                        //->createQuery()
                        //->execute();

        //$this->setTemplate('hola');
        //$this->name = $request->getParameter("nombre","pedro");
    }
    
    public function executeCreate(sfWebRequest $request){
        $this->cat = Doctrine_Core::getTable('categories')->findAll();
        //$this->setTemplate('formAdd');
    }
    
    #public function executeStore(sfWebRequest $request){
        //$this->cat = Doctrine_Core::getTable('categories')->findAll();
        //$this->setTemplate('formAdd');
    #}

    public function executeShow(sfWebRequest $request){
        $this->product = $this->getRoute()->getObject();
        //$this->forward404Unless($this->product);
    }
    
}