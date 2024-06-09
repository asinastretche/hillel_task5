<?php

namespace App\Controllers;

use App\Core\Viewer;

class Home
{
        public function index() :void
        {
            $data = [
                'one'=>'1',
                'two' => '2',
                'three' => '3',
                'four' => '4'
            ];
//            echo "Home Page";
            Viewer::view('home/index', $data);
        }
}