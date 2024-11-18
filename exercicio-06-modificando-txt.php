<?php

//Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

//Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.
$horaModificacao = new DateTime();
$horaFormatada = $horaModificacao->format('Y-m-d H:i:s');

$NomeEDiretorioArquivo = __DIR__ . '/arquivotxt.txt';

$conteudoArquivoTxt = file_get_contents($NomeEDiretorioArquivo);

$conteudoAtualizadoArquivoTxt = $conteudoArquivoTxt . "\n

Agora o arquivo foi alterado - $horaFormatada\n

Reamente, PHP é incrível!";

file_put_contents($NomeEDiretorioArquivo, $conteudoAtualizadoArquivoTxt); //para não alterar o arquivo e sim criar um novo contendo o conteúdo atualizado, podemos usar FILE_APPEND como terceiro parametro dentro da função file_put_contents

/*Poderia ter utilizado 

$arquivo = fopen('teste.txt', 'r'); //carrega o arquivo para o codigo...
$primeiraLinha = fgets($arquivo); //le a primeira linha...
fclose($arquivo); //fecha o aqruivi...

*/