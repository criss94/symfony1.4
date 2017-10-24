<?php

class JobeetJob extends BaseJobeetJob
{
    public function save(Doctrine_Connection $conn = null)
    {
        /*if ($this->isNew() && !$this->getExpiresAt())
        {
          $now = $this->getCreatedAt() ? $this->getDateTimeObject('created_at')->format('U') : time();
          $this->setExpiresAt(date('Y-m-d H:i:s', $now + 86400 * sfConfig::get('app_active_days')));
        }*/
      
        if (!$this->getToken())
        {
            $this->setToken(sha1($this->getEmail().rand(11111, 99999)));
        }
        return parent::save($conn);
    }
    
    // lib/model/doctrine/JobeetJob.class.php
    public function getCompanySlug()
    {
      return Jobeet::slugify($this->getCompany());
    }

    public function getPositionSlug()
    {
      return Jobeet::slugify($this->getPosition());
    }

    public function getLocationSlug()
    {
      return Jobeet::slugify($this->getLocation());
    }
    
    // lib/model/doctrine/JobeetJob.class.php
    public function getTypeName()
    {
      $types = Doctrine_Core::getTable('JobeetJob')->getTypes();
      return $this->getType() ? $types[$this->getType()] : '';
    }

    public function isExpired()
    {
      return $this->getDaysBeforeExpires() < 0;
    }

    public function expiresSoon()
    {
      return $this->getDaysBeforeExpires() < 5;
    }

    public function getDaysBeforeExpires()
    {
      return ceil(($this->getDateTimeObject('expires_at')->format('U') - time()) / 86400);
    }
}
