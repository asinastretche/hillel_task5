<?php

namespace App\Core;

class Router
{
    private const CONTROLLER_PATH = "App\Controllers\\";
    function run(): void
    {
        if (!empty($_SERVER["PATH_INFO"])){
            $separateUrl = explode("/", $_SERVER["PATH_INFO"]);
            $route = ucfirst($separateUrl[1]);
        } else {
            $route = 'апуауккуп';
        }
        $controllerNameSpace = self::CONTROLLER_PATH . $route;

        if (!class_exists($controllerNameSpace)){
            $controllerNameSpace = self::CONTROLLER_PATH . 'Error404';
        }
        $controller = new $controllerNameSpace();
        $controller-> index();
    }
}