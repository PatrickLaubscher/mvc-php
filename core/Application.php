<?php

namespace app\core;

class Application
{

    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;

    public function __construct($rootpath) 
    {
        self::$ROOT_DIR = $rootpath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run() 
    {
        echo $this->router->resolve();
    }
    

    /**
     * Get the value of controller
     *
     * @return Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }

    /**
     * Set the value of controller
     *
     * @param Controller $controller
     *
     * @return self
     */
    public function setController(Controller $controller): self
    {
        $this->controller = $controller;

        return $this;
    }
    
}