<?php

namespace App;

class Router {
    protected $routes = [];
    public function define($data) {
        $this->$routes = $data;
    }
    public function watch() {
        $url = parse_url($_SERVER['REQUEST_URI']);
        $rawPath = explode("/", rtrim($url['path'], "/"));
        $parts = [];

        for ($i =  2; $i < count($rawPath); $i ++) {
            array_push($parts, $rawPath[$i]);
        }

        $path = implode("/", $parts);

        if (array_key_exists($path, $this->$routes)) {
            require $this->$routes[$path];
        }else {
            Router::view('404');
        }
    }
    static function view($filename, $data = []) {
        extract($data);
        return require "app/views/{$filename}.view.php";
    }
}