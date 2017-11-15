<?php

/**
 * rolesCategoria actions.
 *
 * @package    portal-educacion
 * @subpackage rolesCategoria
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rolesCategoriaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    public function executeIndex(sfWebRequest $request)
    {
      //$this->forward('default', 'module');
       $this->roles = Doctrine_Core::getTable('roles_categoria')->findAll();
       //$this->products = $this->getProducts();
                        //->createQuery()
                        //->execute();

        //$this->setTemplate('hola');
        //$this->name = $request->getParameter("nombre","pedro");
    }
    
    public function executeCreate(sfWebRequest $request){
        $this->users = Doctrine_Core::getTable('sfGuardUser')->findAll();
        $this->categories = Doctrine_Core::getTable('categorias')->findAll();
        $this->groups = Doctrine_Core::getTable('sfGuardGroup')->findAll();
        //$this->setTemplate('formAdd');
    }
    
    public function executeStore(sfWebRequest $request){
        $rol_cat = new Roles_categoria();
        $rol_cat->rol_user_id = $request->getParameter('rol_user_id');
        $rol_cat->rol_group_id = $request->getParameter('rol_group_id');
        $rol_cat->rol_cat_id = $request->getParameter('rol_cat_id');
        $rol_cat->save();
        $this->redirect('edit/role/?id='.$rol_cat->getId());
        //$this->cat = Doctrine_Core::getTable('categories')->findAll();
        //$this->setTemplate('formAdd');
    }
    
    public function executeEdit(sfWebRequest $request){
        $this->rol = $this->getRoute()->getObject();
        $this->users = Doctrine_Core::getTable('sfGuardUser')->findAll();
        $this->categories = Doctrine_Core::getTable('categorias')->findAll();
        $this->groups = Doctrine_Core::getTable('sfGuardGroup')->findAll();
    }
    
    public function executeUpdate(sfWebRequest $request){
        $rol_id = $request->getParameter("rol_user_id");
        $q = Doctrine_Query::create()
                    ->update('roles_categoria')
                    ->set('rol_user_id', '?', $request->getParameter('rol_user_id'))
                    ->set('rol_cat_id', '?', $request->getParameter('rol_cat_id'))
                    ->set('rol_group_id', '?', $request->getParameter('rol_group_id'))
                    ->where('id = ?', $rol_id)
                    ->execute();
        
        $this->redirect('edit/role/?id='.$rol_id);
    }
  
}
