<?php

class Router
{
    protected $routes = [];
    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct()
    {
        //example.com/
    }
}