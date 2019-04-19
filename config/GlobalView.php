<?php
namespace Config;
abstract class GlobalView{
    public static function as_view(){
        try {
            $num_args = func_get_args();
            return call_user_func_array([static::class,"get"],$num_args);
        } catch (\Throwable $th) {
           echo $th->getMessage();
        }
    }
}