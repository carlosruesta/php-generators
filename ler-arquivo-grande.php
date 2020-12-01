<?php

use Alura\Generators\LeitorArquivoCsv;

require_once 'vendor/autoload.php';

$leitor = new LeitorArquivoCsv("linhas.csv");

$conteudo = $leitor->lerArquivoCompleto();

foreach ($conteudo as $linha) {
    printf('Nome: %s; Idade: %s; %s', $linha[0], $linha[1], PHP_EOL);
}