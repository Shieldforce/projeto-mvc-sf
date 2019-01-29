<?php

namespace App\Controllers\Painel;

use SF\Controller\Action;

class PrincipalController extends Action
{
    public $pasta;

    public function __construct()
    {
        $this->pasta = "../App/Views/Painel/";
    }

    public function index()
    {
        $this->view($this->pasta, 'index',['nome'=>'Alexandre','sobrenome'=>'Ferreira']);
    }
}