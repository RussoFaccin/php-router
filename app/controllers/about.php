<?php
use \App\Router;

$pageTitle = "About Page!";

Router::view('about', ['pageTitle' => $pageTitle]);