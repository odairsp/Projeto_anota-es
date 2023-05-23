<?php

require_once('./Projeto_anota-es/config/config.php');

class LoginModel extends Connect{
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table = 'usuarios';
    }
}