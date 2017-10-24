<?php
//los controladores son los actions y extienden ed 'sfActions no de Controller
class jobActions extends sfActions
{    
  public function executeIndex(sfWebRequest $request)
  {
    /*
     * recupero todos los puestos de trabajo de la base de datos 'JobeetJob'
     * esto devuelve una coleccion de objetos que lo asignan a la propiedad del objeto 'jobeet_jobs'
     * Todas las propiedades del objeto luego se pasan automáticamente a la plantilla (la Vista)
     * Para pasar los datos del Controlador a la Vista, solo crea una nueva propiedad:
     */
    $this->jobs = Doctrine_Core::getTable('JobeetJob')
      ->createQuery('a')
      ->limit(10)
      ->orderBy('id DESC')
      ->execute();
    
  }

  public function executeShow(sfWebRequest $request)
  {
    /*$this->job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->job);*/
    //$this->job = $this->getRoute()->getObject();
    $this->job = $this->getRoute()->getObject();

    $this->getUser()->addJobToHistory($this->job);
    //$this->forward404Unless($this->job);
  }

  // crud
  public function executeNew(sfWebRequest $request)
  {
    $job = new JobeetJob();
    $job->setType('full-time');
    $this->form = new JobeetJobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JobeetJobForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeet_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($jobeet_job);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeet_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($jobeet_job);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeet_job does not exist (%s).', $request->getParameter('id')));
    $jobeet_job->delete();

    $this->redirect('job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $jobeet_job = $form->save();

      $this->redirect('job/edit?id='.$jobeet_job->getId());
    }
  }
}
