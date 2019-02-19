<?php

use Config\View;
use Config\Route;
require __DIR__."/../views.php";

Route::path("/",function($request){
    return homeView($request);
});

Route::path("/about/[:name]/[:name2]",function($request){
    return aboutView($request);
});

Route::path("POST","/post_name", function($request){
    return post_name($request);
});

