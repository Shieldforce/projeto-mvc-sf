<?php

namespace Tags\Config;

use DirectoryIterator;

class Config
{
    public function ListarTags()
    {
        $path = "/xampp/htdocs/projeto-mvc-sf/Tags/ListaDeTags/";
        foreach (new DirectoryIterator($path) as $fileInfo)
        {
            if($fileInfo->isDot()) continue;
            $filename = $fileInfo->getBasename('.php');
            $namespaceClass = "\\Tags\\ListaDeTags\\".$filename;
            $obj = new $namespaceClass;
            print_r($obj->get());
        }
        return false;
    }
}