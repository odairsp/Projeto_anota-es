<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class UserController extends Controller 
{


  public function index(Request $request)
  {
    $params = [
        'user' => [
          'username' => $request->post()['useername'],
          'password' => $request->post()['password'],
        ]
      ];
      $this->view('home', $params);
  }
}