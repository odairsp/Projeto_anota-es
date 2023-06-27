<?php

namespace App\Controllers;
use Core\Request;
use Core\Controller;
use App\Models\User;


class sessionController extends Controller
{
    public function entrar(Request $request)
    {
        $user = new User();
        $targetUser = $user->find(conditions: ["email" => $request->post('email'), "password" =>$request->post('password')]);;

        if (!isset($targetUser[0])) {
            echo "login invalido!";
            $this->view('index');
        } else {
            $this->view('home');
        }
    }
}