<?php

use Config\View;
use Config\Route;
require __DIR__."/../views.php";

Route::path("GET","/",function(){
    return homeView();
});

Route::path("GET","/about",function(){
    return aboutView();
});


