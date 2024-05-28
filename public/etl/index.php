<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../../vendor/autoload.php";

use Solid\ETL\Leitor;

/* Leito CSV */
$leitorcsv = new Leitor();
$leitorcsv->setDiretorio(__DIR__.'/arquivos');
$leitorcsv->setArquivo('dados.csv');
$csv = $leitorcsv->lerArquivo();

/* Leito TXT */
$leitortxt = new Leitor();
$leitortxt->setDiretorio(__DIR__.'/arquivos');
$leitortxt->setArquivo('dados.txt');
$txt = $leitortxt->lerArquivo();

$result = array_merge($csv,$txt);

echo "<pre>";
    print_r($result);
echo "</pre>";