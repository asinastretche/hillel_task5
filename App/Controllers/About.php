<?php

namespace App\Controllers;
use App\Core\Viewer;
class About
{
    public function index() :void
    {
//        echo "About Page";
        Viewer::view("about/index");

    }
}