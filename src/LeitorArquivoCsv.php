<?php

namespace Alura\Generators;

class LeitorArquivoCsv
{
    /** @var false|resource */
    private $arquivo;

    public function __construct($nomeArquivo)
    {
        $this->arquivo = fopen($nomeArquivo, 'r');
    }

    public function lerArquivoCompleto()
    {
        while (!feof($this->arquivo)) {
            yield fgetcsv($this->arquivo);
        }
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}