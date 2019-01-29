<?php

namespace SF\Controller;

class Template
{
    private $dados = array();
    private $arquivo;
    private $pasta;

    public function __construct($pasta = '', $arquivo = '', $array = [])
    {
        $this->setPasta($pasta);
        $this->setArquivo($arquivo);
    }

    public function setDados($array)
    {
        $this->dados = $array;
    }
    public function getDados()
    {
        return $this->dados;
    }

    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;

    }

    public function getArquivo()
    {
        return $this->arquivo.'.phtml';
    }

    public function setPasta($pasta)
    {
        $this->pasta = $pasta;
    }

    public function getPasta()
    {
        return $this->pasta;
    }

    protected function carregarArquivo()
    {
        if(file_exists($this->getPasta().'/'.$this->getArquivo()))
        {
            $arquivo = file_get_contents($this->getPasta().'/'.$this->getArquivo());
        }
        else
        {
            throw new \Exception('Erro ao carregar o arquivo'.$this->getArquivo());
        }
        return $arquivo;
    }

    public function publicar()
    {
        try
        {
            $arquivo = $this->carregarArquivo();
            $array = $this->getDados();
            foreach ($array as $k => $v)
            {
                $troca = '{{ $'.$k.' }}';
                $arquivo = str_replace($troca, $v, $arquivo);
            }
            echo $arquivo;
        }
        catch (\Exception $error)
        {
            echo $error->getMessage();
        }
    }
}