<?php

namespace Router;

class Router
{

    public $url;
    public $routes = [];

    function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Récupere le chemin et la methode pour faire la route
     */
    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action);
    }

    /**
     * Apres l'analyse l'url, on execute la methode contenue dans le controller
     */
    public function run()
    {
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->matches($this->url)) {
                $route->execute();
            }
        }

        return header('HTTP/1.0 404 Not Found');
    }
}
