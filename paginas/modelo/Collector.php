<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-163-230-219.compute-1.amazonaws.com
");
define("DB_USER", "insdwpnmbkldmt");
define("DB_PASS", "504f152eef19accd812f48d6a9f192a671a0888ada70e942a1a4eb19f737f9e3");
define("DB_NAME", "d7g2o0nh5j1mv2");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
