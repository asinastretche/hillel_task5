<?php

namespace App\Core;

class Viewer
{
    private const DEFAULT_FILE_TYPE = "php";
    static public function view(string $view, array $data = [],string $file_type = self::DEFAULT_FILE_TYPE): void
    {
        $routeFull = explode('/', $view);
        $route = $routeFull[0];
        $file = $routeFull[1];

        extract($data);

        $absoluteFilePath =  __DIR__ . "/../../public/view/" . $route . '/' . $file . "." . $file_type;
        if(!file_exists($absoluteFilePath)){
            include __DIR__ . '/../../public/view/error404/index.php';
        }else {
            include $absoluteFilePath;
        }

    }
}