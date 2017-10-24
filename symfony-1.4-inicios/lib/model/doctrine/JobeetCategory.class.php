<?php

class JobeetCategory extends BaseJobeetCategory
{    
    /*public function getActiveJobs()
    {
      $q = Doctrine_Query::create()
        ->from('JobeetJob j')
        ->where('j.category_id = ?', $this->getId());

      return Doctrine_Core::getTable('JobeetJob')->getActiveJobs($q);
    }*/
    
    public function getActiveJobs($max = 10)
    {
      $q = $this->getActiveJobsQuery()
        ->limit($max);

      return $q->execute();
    }
    
    public function countActiveJobs()
    {
      return $this->getActiveJobsQuery()->count();
    }
    
    public function getActiveJobsQuery()
    {
      $q = Doctrine_Query::create()
        ->from('JobeetJob j')
        ->where('j.category_id = ?', $this->getId());

      return Doctrine_Core::getTable('JobeetJob')->addActiveJobsQuery($q);
    }
    
    /*public function getSlug()
    {
      return Jobeet::slugify($this->getName());
    }*/
}
