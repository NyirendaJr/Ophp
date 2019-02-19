<?php
//use Config\View;
require "config/view.php";
use Controllers\Users;

function homeView(){
    $users = Users::get_all_user();

    return View::render("welcome.html",[
        "title"=>"devpyjoh starter",
        "users"=> $users
    ]);

}

function aboutView(){
    return View::render("about.html");
}

