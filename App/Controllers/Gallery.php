<?php

namespace App\Controllers;
use App\Core\Viewer;

class Gallery
{
    public function index() :void
    {
//        echo "Gallery Page";
        Viewer::view("gallery/index");
    }
}