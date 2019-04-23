<?php
namespace Controllers;
use Models\User;
class Users{

    public static function createUser($username){
        return User::create(['name' => $username]);
    }

    public static function getAllUser(){
        return User::all();
    }
}
?>
