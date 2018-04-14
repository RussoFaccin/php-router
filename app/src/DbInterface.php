<?php

namespace App;

class DbInterface {
  static function connect($host, $dbname, $user, $pass) {
    $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";
    try {
      return new \PDO($dsn, $user, $pass);
    } catch (PDOException $e) {
      die('ERROR: '.$e);
    }
  }
}