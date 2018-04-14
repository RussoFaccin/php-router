<?php
use App\Router;
use App\DbInterface;
use App\Utils;

$pdo = DbInterface::connect('localhost', 'playground', 'root', 'root');

$queryStr = "SELECT * FROM teste";
$stmt = $pdo->prepare($queryStr);
$stmt->execute();
$names = $stmt->fetchAll();
$pageTitle = "Home Page";
Router::view('home', ['pageTitle' => $pageTitle, 'names' => $names]);