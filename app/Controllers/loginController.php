<?php

require_once('./Projeto_anota-es/app/Models/loginModel.php');



class loginController{
    private $model;

    function __construct()
    {
        $this->model = new LoginModel();
    }
}






