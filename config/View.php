<?php
// require __DIR__.'/Filter.php';
// namespace Config;
use Config\Filter;

class View{
    public static function render($path, $content = []){
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../public');
        $twig = new Twig_Environment($loader);
        $twig->addExtension(new Filter());
        return $twig->render($path, $content);
    }
}