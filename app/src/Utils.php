<?php

namespace App;

class Utils {
    static function dd($data) {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }
}