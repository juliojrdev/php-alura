<?php

require "funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];


echo $filme["ano"]."\n\n\n";

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
var_dump($menorNota);

echo "\n\n\n";

var_dump($filme["nome"]);
$posicaoDoisPontos = strpos($filme["nome"], ':');
var_dump($posicaoDoisPontos);
var_dump(substr($filme["nome"], 0, $posicaoDoisPontos));

echo "\n\n\n";

$filmeStringJson = json_encode($filme);

var_dump($filmeStringJson);

file_put_contents(__DIR__ . '/filme.json', $filmeStringJson);

$importFilmeJson = file_get_contents(__DIR__.'/filme.json');

var_dump($importFilmeJson);

$decodeFilmeJson = json_decode($importFilmeJson, true);

var_dump($decodeFilmeJson);