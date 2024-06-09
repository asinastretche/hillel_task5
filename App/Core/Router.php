<?php

namespace App\Core;

class Router
{
    private const METHOD = 'index';
    private const CONTROLLER_PATH = "App\Controllers\\";
   private  array $route = [];
   public function __construct()
   {
       $this ->route = require_once __DIR__ . "/../../config/router.php";
   }
    function run(): void
    {
        if (!empty($_SERVER["PATH_INFO"])){
            if (array_key_exists($_SERVER["PATH_INFO"], $this ->route)){
                $separateUrl = explode(":", $_SERVER["PATH_INFO"]);
                $route = ucfirst($separateUrl[0]);
            } else{
                $route = "Error404";
            }
        }
        else {
            $route = 'Home';
         }

        $method = $separateUrl[1] ?? self::METHOD;
        $controllerNameSpace = self::CONTROLLER_PATH . $route;

        if (!class_exists($controllerNameSpace)){
            $controllerNameSpace = self::CONTROLLER_PATH . 'Error404';
        }

        $controller = new $controllerNameSpace();
        if (!method_exists($controller, $method)){
            $method = 'Error404';
        }

        $controller-> $method();
    }
}