<?php
namespace Config;
abstract class GlobalView{
    public static function as_view(){
        try {
            $num_args = func_get_args();
            $class = new \ReflectionClass(static::class);
            $method = $class->getMethods();
            if ($num_args[0]->method("post")){
                return call_user_func_array([static::class,"post"],$num_args);
            }else{
                return call_user_func_array([static::class,"get"],$num_args);
            }
        } catch (\Throwable $th) {
            error_log($th->getMessage(),4);;
        }
    }
}