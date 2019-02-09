<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Post;
use Icebox\App;

class PostsController extends AppController
{
    public function index()
    {
      $posts = Post::find('all');
     return $this->render(null, [ 'posts' => $posts ]);
    }

    public function new()
    {
        return $this->render();
    }

    public function create()
    {
        return $this->render();
    }

    public function show()
    {
        return $this->render();
    }

    public function edit()
    {
        return $this->render();
    }

    public function update()
    {
        return $this->render();
    }

    public function delete()
    {
        return $this->render();
    }
}
