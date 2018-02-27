<?php

namespace App;

class DbInterface {
  static function connect() {
    $dsn = "mysql:host=localhost;dbname=playground;charset=utf8";
    try {
      return new \PDO($dsn, 'root', 'root');
    } catch (PDOException $e) {
      die('ERROR: '.$e);
    }
  }
}