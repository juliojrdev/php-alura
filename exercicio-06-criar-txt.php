<?php

//Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

//Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$horaModificacao = new DateTime();
$horaFormatada = $horaModificacao->format('Y-m-d H:i:s');

$mensagemParaSalvar = "Mensagem para Salvar no Arquivo .txt:\n
Arquivo criado por Julio C. S. Junior para o Curso PHP Alura - $horaFormatada";

$NomeEDiretorioArquivo = __DIR__ . '/arquivotxt.txt';

file_put_contents($NomeEDiretorioArquivo, $mensagemParaSalvar);