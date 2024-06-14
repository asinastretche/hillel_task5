<?php

namespace App\Controllers;

use App\Core\Viewer;
use App\Orm\Connect;
use App\Models\Post;

class Home
{
        public function index() :void
        {
            $post = new Post();
            $data['data'] = $post->findAll();

            $connect = new Connect();
            var_dump($connect ->getConnect());


            Viewer::view('home/index',$data);
        }
}