<?php

namespace app\core;

class Router 
{
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback) 
    {
        $this->routes[$path] = $callback;
    }

    public function resolve()
    {
        $this->request->getPath();
        
    }

}