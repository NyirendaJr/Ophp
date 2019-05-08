<?php

use Config\View;
use Config\Route;
use Config\GlobalView;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\DebugClassLoader;

Debug::enable();
ErrorHandler::register();
DebugClassLoader::enable();

require __DIR__."/../views.php";

Route::path("/",new HomeView());

Route::path("/about",new AboutView());
