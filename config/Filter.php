<?php
namespace Config;
// this is the extension help to build twig custom features
class Filter extends \Twig\Extension\AbstractExtension
{
    public function getFunctions()
    {
        return [
            new \Twig\TwigFunction('static', [$this, 'static']),
            new \Twig\TwigFunction('route', [$this, 'route']),
        ];
    }

    public function static($path){
        return 'static/'.$path;
    }

    public function route($path){
        return 'public/'.$path;
    }
}
