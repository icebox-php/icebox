<?php

namespace App\Controller;

use Icebox\Request;
use App\Controller\AppController;
use App\Model\Post;
use Icebox\App;

class PostsController extends AppController
{
    public function index()
    {
        $posts = Post::find('all');
        return $this->render(null, array( 'posts' => $posts ));
    }

    public function action_new()
    {
        return $this->render(null, [ 'post' => new Post() ]);
    }

    public function create()
    {
        $post = new Post($this->post_params());
        $saved = $post->save();

        if($saved) {

            if(isset($_FILES['picture'])) {
              $pictue_file_name = md5(microtime()) . '.jpg';
              $path = ICEBOX_DIRECTORY_PUBLIC . '/images/' . $pictue_file_name;
              move_uploaded_file($_FILES['picture']['tmp_name'], $path);
              $post->picture = $pictue_file_name;
              $post->save(false);
            }

            $this->flash('success', 'Saved successfully');
            return $this->redirect(App::url('posts/:id', [':id' => $post->id]));
        } else {
            return $this->render('new', array( 'post' => $post ));
        }
    }

    public function show()
    {
        $post = Post::find(Request::params('id'));
        return $this->render(null, [ 'post' => $post ]);
    }

    public function edit()
    {
        $post = Post::find(Request::params('id'));
        return $this->render(null, [ 'post' => $post ]);
    }

    public function update()
    {
        $post = Post::find(Request::params('id'));
        $updated = $post->update_attributes($this->post_params());

        if($updated) {
            $this->flash('success', 'Updated successfully');
            return $this->redirect(App::url('posts/:id', [':id' => $post->id]));
        } else {
            return $this->render('edit', array('post' => $post));
        }

    }

    public function delete()
    {
        $post = Post::find(Request::params('id'));
        $post->delete();
        $this->flash('success', 'Deleted successfully');
        return $this->redirect(App::url('posts'));
    }

    private function post_params() {
      return $this->filter_post_params(array('title', 'content', 'published', 'publish_date', 'create_time', 'decimal_col', 'float_col', 'int_col', 'time_col', 'country'));
    }
}
