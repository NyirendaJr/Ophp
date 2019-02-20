<?php
//use Config\View;
require "config/View.php";
use Controllers\Users;

function homeView($request){
    // $users = Users::get_all_user();

    return View::render("welcome.html",[
        "title"=>"devpyjoh starter",
        // "users"=> $users
    ]);

}

function aboutView($request){
    echo "<pre>";
    var_dump($request);
    return View::render("about.html");
}


function post_name($request){
    if($_POST['name']){
        print($_POST['name']);
    }
}
