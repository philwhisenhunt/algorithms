<?php

class Router
{
    protected $routes = [];
    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        //example.com/about-culture

        //Use the array_key_exists function to search through the routes
        //and look for anything that matches the given $uri
        array_key_exists($uri, $this->routes);
    }
}