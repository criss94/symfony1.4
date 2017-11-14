<?php

class homeActions extends sfActions
{
    /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeIndex(sfWebRequest $request)
    {
        //guardo el id en una varibale para enviarsela a la vista y comparar el mismo con el campo rol_user_id(fireign key) de la tabla roles_categoria
        $this->user_id = $this->getUser()->getGuardUser()->getId();
        
        //envio el nombre y apellido completo a la vista guardada en sesiones para ver quien le logueo
        $this->getUser()->setAttribute('full_name', $this->getUser()->getGuardUser()->getFirstName()." ".$this->getUser()->getGuardUser()->getLastName());
        
        //envio la data de las categorias y los botones filtrando por los roles segun el usuario e imprimir solo la info disponible para ese usuario
        $this->rol_cat = Doctrine_Core::getTable('roles_categoria')->findAll();
        $this->categorias = $this->getUser()->getGuardUser()->getGroups()->getFirst()->getCategorias();
        $this->botones = Doctrine_Core::getTable('Botones')->findAll();
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        //creo una credencial para el usuario, para verificar y mostrar el login o el contenido segun sea el caso
        //$user = $this->getUser();
        //$user->addCredential('user');
        
        //verifico la credencial, este me devuelve true si existe
        //if($user->hasCredential('user')){
        //$roles = Doctrine_Core::getTable('sfGuardGroup')->findAll();
        //$roles = Doctrine_Core::getTable('roles_categoria')->findAll();

        /*$this->rol = Doctrine_Query::getTable('Roles_categoria')
                            ->createQuery('r')
                            ->where('r.rol_user_id = ?', $user_id)
                            ->execute();*/
                            
        //$this->r = $q->execute();*/
        
        //foreach ($roles as $r){  
            
        /*if($user_id == $r->getRolUserId()){
            $this->getUser()->setAttribute($r->getsfGuardGroup()->getName(), $r->getsfGuardGroup()->getName());
            $this->user_id = $this->getUser()->getGuardUser()->getId();
        }*/
            /*if ($user_id == $r->getRolUserId() && $r->getRolGroupId() == 2){
                $this->getUser()->setAttribute('docentes','docentes');
                $this->user_id = $this->getUser()->getGuardUser()->getId();
            }
            if($user_id == $r->getRolUserId() && $r->getRolGroupId() == 3){
                $this->getUser()->setAttribute('alumnos','alumnos');
                $this->user_id = $this->getUser()->getGuardUser()->getId();
            }*/
            //$this->getUser()->setAttribute($r->getsfGuardGroup()->getName(), $r->getsfGuardGroup()->getName());
        //}
        
        //$this->user = Doctrine_Core::getTable('sfGuardUser')->findAll();
        //}
        
    }
    
}