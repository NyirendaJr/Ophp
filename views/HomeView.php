<?php


namespace System\views;
use Config\GlobalView;
use Config\View;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\DebugClassLoader;


Debug::enable();
ErrorHandler::register();
DebugClassLoader::enable();

class HomeView extends GlobalView
{
    public function get($request,$response){
        return View::render("welcome.html.twig",["title"=>"olphp"]);
    }
}