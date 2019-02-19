<?php

//namespace Config;

class View{
    public static function render($path, $content = []){
        $loader = new Twig_Loader_Filesystem(__DIR__.'\..\static');
        $twig = new Twig_Environment($loader);
        return $twig->render($path, $content);
    }
}