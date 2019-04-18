<?php

use Config\View;
use Config\Route;
use Config\GlobalView;
require __DIR__."/../views.php";

Route::path("/",function($request,$response){
    return HomeView::as_view($request,$response);
});

Route::path("/about",function($request,$response){
    return AboutView::as_view($request,$response);
});
