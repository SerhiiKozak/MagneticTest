<?php

namespace Serhii\Bundle\TestBundle\Model;

use Serhii\Bundle\TestBundle\Library\Model;

class CompanyModel extends Model
{

  public function getPortraits()
  {
    $sql = 'SELECT * FROM arocrm.portrait_crud;';
    $result = parent::createConnection()->query($sql);
    return $result;
  }

}