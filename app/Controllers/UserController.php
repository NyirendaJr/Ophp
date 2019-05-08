<?php
namespace Controllers;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\DebugClassLoader;

Debug::enable();
ErrorHandler::register();
DebugClassLoader::enable();
use Models\User;

class UserController{

    public static function createUser($name){
        return User::create(['name' => $name]);
    }

    public static function getAllUser(){
        return User::all();
    }
}

