<?php
require __DIR__ . "/funcoes-junior.php";

/* função que é chamada através do REQUIRE para criar o nome do arquivo filme .json que está sendo exportado. 

function criarNomeArquivosJsonFilmes($nomeFilme){
    $partesNome = explode(" ", $nomeFilme);
    $juntaPartesNome = "";
    for($p = 0; $p < count($partesNome); $p++) {
        $juntaPartesNome .=  $partesNome[$p]; //concatena as variaveis tipo string
    }
    return $juntaPartesNome;
}*/

// 1) Transforme o array associativo $filme em um JSON e escreva o resultado em um arquivo;

$dadosNovoFilme = [
    "nomeFilme" => "A Forja - O Poder da Transformação",
    "anoLancamento" => 2024,
    "notasAvaliacoes" => [10,9,10,10,8,9,8,10,9],
    "planoPrime" => true,
    "genero" => "drama",
];

$nomeFilme = criarNomeArquivosJsonFilmes($dadosNovoFilme['nomeFilme']);

$nomeDoArquivo = __DIR__ . '/'. $nomeFilme. '.json';
$filmesExportar = json_encode($dadosNovoFilme);

file_put_contents($nomeDoArquivo, $filmesExportar);

//Em outro arquivo PHP, leia o conteúdo em JSON e transforme-o em um array associativo no PHP.


$importaFilme = file_get_contents(__DIR__ . '/AForja-OPoderdaTransformação.json');

$decodeFilmeImportado = json_decode($importaFilme, true);

$filmeImportadoEDecodificado = $decodeFilmeImportado;

var_dump($filmeImportadoEDecodificado);