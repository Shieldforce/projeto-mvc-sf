<?php

namespace App\Routes;

use SF\Init\Bootstrap;

class Web extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['Home.Index'] = ['route'=>'/','controller'=>'Home\\HomeController','action'=>'index'];
        $ar['Painel.Index'] = ['route'=>'/Painel','controller'=>'Painel\\PrincipalController','action'=>'index'];
        $this->setRoutes($ar);
    }
}