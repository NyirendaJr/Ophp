<?php
namespace Config;

abstract class GlobalView{
    public static function as_view(){
        try {
            $num_args = func_get_args();
            $class = new \ReflectionClass(static::class);
            $method = $class->getMethods();
            if ($num_args[0]->method("post")){
                 $result = call_user_func_array([static::class,"post"],$num_args);
                 if ($result == null){
                     throw new \Exception("[POST] The Request has None response");
                 }
            }else{
                $result = call_user_func_array([static::class,"get"],$num_args);
                if ($result == null){
                    throw new \Exception("[GET] The Request has None response");
                }else{
                    return $result;
                }
            }
        } catch (\Throwable $th) {
            $line = $th->getLine();
            $code = $th->getCode();
            $file = $th->getFile();
            error_log("[{$file}][line: {$line}]".$th->getMessage(),4);
            die();
        }
    }
}