<?php
namespace Config;
use \Twig\Extension\AbstractExtension;
// this is the extension help to build twig custom features
class Filter extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new \Twig\TwigFunction('render_static', [$this, 'static']),
            new \Twig\TwigFunction('render_route', [$this, 'route']),
        ];
    }

    public function static($path){
        return 'static/'.$path;
    }

    public function route($path){
        return 'public/'.$path;
    }
}
