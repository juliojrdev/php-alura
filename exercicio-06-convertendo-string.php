<?php
// Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.

$stringPura = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

$stringParaObjeto = json_decode($stringPura, true);

var_dump($stringParaObjeto);