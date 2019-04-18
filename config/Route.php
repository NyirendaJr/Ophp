<?php
namespace Config;
use Klein\Klein;

class Route{
    public static function path($pattern, $file_location){
        try {
            $klein = new Klein(); 
            if (preg_match("/^(?:(?:\/)?(?:.*))|(?:(?:\/))/",$pattern,$matches)) {
                $klein->respond($pattern, $file_location);
                $klein->dispatch();
            }
        } catch (\Throwable $th) {
            print($th->getMassage());
        }
    }


    public static function message($err_msg){
        $klein = new Klein();
        $klein->onError(function ($klein, $err_msg) {
            $klein->service()->flash($err_msg);
            $klein->service()->back();
        });
    }
    
}