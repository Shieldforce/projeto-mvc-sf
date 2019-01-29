<?php

namespace SF\Controller;

class Action
{
    public function view($pasta, $arquivo, $array)
    {
        $template = new Template($pasta, $arquivo, $array);
        $template->setDados($array);
        $template->publicar();
        //include_once "$pasta"."".$arquivo.".phtml";
    }
}