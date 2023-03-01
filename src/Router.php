<?php
namespace App;

use AltoRouter;

class Router{

    private $url;

    private $router;
    
    public function __construct(string $view){
        $this->url = $view;
        $this->router = new AltoRouter();
    }
    public function get(string $chemin,string $view,?string $name = null):self
    {
        $this->router->map('GET',$chemin,$view,$name);
        return $this;
    }
    public function post(string $chemin,string $view,?string $name = null):self
    {
        $this->router->map('POST',$chemin,$view,$name);
        return $this;
    }

    public function run():self
    {
        $match = $this->router->match();

        if($match == false)
        {
            $match['target'] = '/e404';
        }
        $router = $this->router;
        $view = $match['target'];
        require $this->url.$view.'.php';
        return $this;
    }

}