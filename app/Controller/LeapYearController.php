<?php

namespace App\Controller;

use Icebox\Request;
use App\Controller\AppController;

class LeapYearController extends AppController
{
    public function index() {
      $year = Request::params('year');

      $is_leapyear = (($year % 4 === 0) && ($year % 100 !== 0 || $year % 400 === 0));

      return $this->render(null, [
          'is_leapyear' => $is_leapyear,
        ], [
          // 'layout' => false,
          'layout' => 'application',
          'status' => 200,
          'headers' => [
            ['Content-Type', 'text/html'],
          ],
        ]);
    }
}
