<?php
use \App\Router;

$pageTitle = "Home Page";
Router::view('home', ['pageTitle' => $pageTitle]);