<?php 

namespace Solid\ETL;

use Solid\ETL\Arquivo;

class Leitor {

    private $arquivo;
    private $diretorio;

    /**
     * Get the value of arquivo
     */ 
    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    /**
     * Set the value of arquivo
     *
     * @return  self
     */ 
    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;

        return $this;
    }

    /**
     * Get the value of diretorio
     */ 
    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    /**
     * Set the value of diretorio
     *
     * @return  self
     */ 
    public function setDiretorio($diretorio)
    {
        $this->diretorio = $diretorio;

        return $this;
    }
    
    public function lerArquivo(): array {
        $caminho = $this->getDiretorio()."/".$this->getArquivo();
        $arquivo = new Arquivo();

        $extensao = explode('.', $this->getArquivo());

        if($extensao[1] == 'csv') {
        
            $arquivo->lerArquivoCSV($caminho);
        } else if($extensao[1] == 'txt') {
            $arquivo->lerArquivoTXT($caminho);
        }


        return $arquivo->getDados();
    }
}