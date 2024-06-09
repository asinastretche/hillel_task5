<?php

namespace App\Controllers;
use App\Core\Viewer;

class Error404
{
    public function index() :void
    {
//        echo "Error404 Page";
        Viewer::view("error404/index");
    }
}