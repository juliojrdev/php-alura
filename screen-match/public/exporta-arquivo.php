<?php

$filme = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'genero' => $_POST['genero'],
];

$filmeEmJson = json_encode($filme);
$nomeEDiretorio = __DIR__ . '/filme.json';

//exportando o json para a pasta
file_put_contents($nomeEDiretorio, $filmeEmJson);

header('Location: /sucesso.php?filme=' . $filme['nome']);