<?php
namespace Config;
use Klein\Klein;

class Route{
    public static function path($method,$pattern,$file_location){
        $klein = new Klein(); 
        $path = "";
        // preg_match("/^\/$/",$pattern)
        if (preg_match("/^(?:(?:\/)?(?:.*))|(?:(?:\/))/",$pattern,$matches)) {
            // print_r($matches);
            $klein->respond($method, $pattern,$file_location);
            $klein->dispatch();
        }
    }
    
}