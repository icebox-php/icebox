<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Post;
use Icebox\App;

class PageController extends AppController
{
    public function home()
    {
        return $this->render(null, [
          'text' => 'This is home page!'
        ], [
          // 'layout' => false,
          'layout' => 'application',
          'status' => 200,
          'headers' => [
            ['Content-Type', 'text/html'],
          ],
        ]);
    }

    public function flash_message() {
      $this->flash('success', 'This is a flash message');
      return $this->redirect(App::root_url('/posts'));
    }

    public function about() {
      return $this->render();
    }

    private function is_leap_year($year) {
  	    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
    }
}
