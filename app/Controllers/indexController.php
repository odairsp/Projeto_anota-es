<?php
namespace App\Controllers;

use Core\Controller;

class IndexController extends Controller {
    
    public function index() {
        $this->view('index');
    }
    public function cadastro() {
        $this->view('cadastro');
    }
}
