<?php

use Config\Route;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\DebugClassLoader;
Debug::enable();
ErrorHandler::register();
DebugClassLoader::enable();

Route::path("/",new \System\views\HomeView());
