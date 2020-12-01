<?php

$arquivo = fopen('linhas.csv', 'w');

for ($i = 1; $i<=10000000; $i++) {
    $dados = [
        'nome' => "nome.{$i}",
        'idade' => rand(18, 30)
    ];
    fputcsv($arquivo, $dados);
}

fclose($arquivo);