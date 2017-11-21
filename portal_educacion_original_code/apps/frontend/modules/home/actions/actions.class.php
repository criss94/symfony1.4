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
        /*//creo una credencial para el usuario, para verificar y mostrar el login o el contenido segun sea el caso
        $user = $this->getUser();
        $user->addCredential('user');
        
        //verifico la credencial, este me devuelve true si existe
        if($user->hasCredential('user')){
            $this->categorias = Doctrine_Core::getTable('Categorias')->findAll();
            $this->botones = Doctrine_Core::getTable('Botones')->findAll();
        }*/

        //guardo el id en una varibale para enviarsela a la vista y comparar el mismo con el campo rol_user_id(fireign key) de la tabla roles_categoria
        $this->user_id = $this->getUser()->getGuardUser()->getId();
        
        //guardo el nombre y apellido completo a la vista guardada en sesiones para ver quien se logueo
        $this->getUser()->setAttribute('full_name', $this->getUser()->getGuardUser()->getFirstName()." ".$this->getUser()->getGuardUser()->getLastName());
        //guardo el email del usuario logueado
        $this->getUser()->setAttribute('user_email', $this->getUser()->getGuardUser()->getEmailAddress());

        //envio la data de las categorias y los botones filtrando por los roles segun el usuario e imprimir solo la info disponible para ese usuario
        //$this->rol_cat = Doctrine_Core::getTable('roles_categorias')->findAll();
        $this->categorias = $this->getUser()->getGuardUser()->getGroups()->getFirst()->getCategorias();
        //$this->botones = Doctrine_Core::getTable('Botones')->findAll();
        $this->noticias = Doctrine_Core::getTable('Noticias')->findAll();
        $this->servicios = Doctrine_Core::getTable('Servicios')->findAll();
        
        
    }
    
}