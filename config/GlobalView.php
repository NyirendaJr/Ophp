<?php
namespace Config;
abstract class GlobalView{
    public static function as_view($request,$response){
        try {
            switch ($request->method()) {
                case 'GET':
                    return static::get($request,$response);
                    break;
                case 'POST':
                    return static::post($request,$response);
                    break;
                default:
                    return static::get($request,$response);
                    break;
            }
            
        } catch (\Throwable $th) {
           print($th->getMessage());
        }
        
    }
}