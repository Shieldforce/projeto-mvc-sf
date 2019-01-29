<?php

namespace App\Controllers\Home;

use SF\Controller\Action;

class HomeController extends Action
{
    public $pasta;

    public function __construct()
    {
        $this->pasta = "../App/Views/Home/";
    }

    public function index()
    {
        $this->view($this->pasta, 'index',['nome'=>'Alexandre','sobrenome'=>'Ferreira']);
    }
}