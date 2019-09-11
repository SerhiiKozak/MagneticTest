<?php

namespace Serhii\Bundle\TestBundle\Library;
use \PDO;

class Model
{

  public static function createConnection()
  {
    $connection = new PDO("mysql:host=localhost;dbname=arocrm", 'orocrmuser', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connection;
  }

}