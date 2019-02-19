<?php
namespace Config;
use Klein\Klein;

class Route{
    public static function path(){
        $arg_list = func_get_args();
        $args_num = func_num_args();
        switch ($args_num) {
            case 2:
                $method = "GET";
                $pattern = $arg_list[0];
                $file_location = $arg_list[1];
                break;
            case 3:
                $method = $arg_list[0];
                $pattern = $arg_list[1];
                $file_location = $arg_list[2];
                break;
            
            default:
                print("You are crazy");
                break;
        }
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