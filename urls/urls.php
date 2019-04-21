<?php

use Config\View;
use Config\Route;
use Config\GlobalView;
require __DIR__."/../views.php";

Route::path("/",new HomeView());

Route::path("/about/",new AboutView());
