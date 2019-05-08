<?php
require "vendor/autoload.php";
require __DIR__."/config/database.php";
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\DebugClassLoader;


Debug::enable();
ErrorHandler::register();
DebugClassLoader::enable();
use Models\Database;

new Database();
