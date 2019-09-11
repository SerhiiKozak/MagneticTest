<?php

namespace Serhii\Bundle\TestBundle\Model;

use Serhii\Bundle\TestBundle\Library\Model;

class PortraitModel extends Model
{

  public function getPortraits()
  {
    $sql = 'SELECT * FROM arocrm.portrait_crud;';
    $result = parent::createConnection()->query($sql);
    return $result;
  }

  public function addColumn($name, $type)
  {
    $sql_type = [
      'string'  => 'VARCHAR(255)',
      'text'    => 'TEXT',
      'date'    => 'DATE',
      'integer' => 'INT(8)',
      'boolean' => 'BOOLEAN'
    ];
    $sql = 'ALTER TABLE arocrm.portrait_crud ADD ' . $name . ' ' . $sql_type[$type] . ';';
  }
}

