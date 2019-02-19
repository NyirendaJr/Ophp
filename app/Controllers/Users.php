<?php
namespace Controllers;
use Models\User;
class Users{

    public static function create_user($username, $password){
        $user = User::create([
            'username' => $username,
            'password' => $password
        ]);

        return $user;

    }

    public static function get_all_user(){
        $users = User::all();
        return $users;
    }
}
?>