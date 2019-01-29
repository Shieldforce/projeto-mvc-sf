<?php

namespace App\Controllers\Home;

use SF\Controller\Action;
use Tags\Config\Config;

class HomeController extends Action
{
    public $caminho_da_view;

    public function __construct()
    {
        $this->caminho_da_view = "../App/Views/Home/";
    }

    public function index()
    {
        $listar = new Config;
        $listar->ListarTags();



        $this->view($this->caminho_da_view, 'index', $listar->ListarTags());
    }
}