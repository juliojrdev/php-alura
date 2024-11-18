<?php
/*
Desenvolvido por Julio C. S. Junior - Nov. 2024
Algoritmo desenvolvido para exercício prático do curso de PHP Orientado a Objeto da plataforma Alura ministrado pelo Prof. Vinicius Dias
*/

require __DIR__ . "/funcoes-junior.php";
require __DIR__ . "/criar-filme.php";

$listaDeFilmes = [[    
    "nomeFilme" => "Top Gun - Maverick",
    "anoLancamento" => 2022,
    "notasAvaliacoes" => [10, 8, 9, 8, 7],
    "planoPrime" => false,
    "genero" => "ação",
],[    
    "nomeFilme" => "Thor - Ragnarok",
    "anoLancamento" => 2023,
    "notasAvaliacoes" => [9, 8, 10, 9, 6, 10],
    "planoPrime" => true,
    "genero" => "super-herois",
]];

// adicionado + 1 filme no catalogo...
$dadosNovoFilme = [
    "nomeFilme" => "Velozes e Furiosos - Desafio em Tokyo",
    "anoLancamento" => 2018,
    "notasAvaliacoes" => [10, 9, 9, 10, 10, 10, 9, 8],
    "planoPrime" => false,
    "genero" => "corridas e ficção científica",
];

adicionarFilmesNaLista($listaDeFilmes, $dadosNovoFilme);


// adicionado + 1 filme no catalogo...
$dadosNovoFilme = [
    "nomeFilme" => "Homem Aranha - Nunca bate só apanha",
    "anoLancamento" => 2024,
    "notasAvaliacoes" => [10, 7, 9, 10, 6, 10, 9, 8],
    "planoPrime" => true,
    "genero" => "herois e ficção científica",
];

adicionarFilmesNaLista($listaDeFilmes, $dadosNovoFilme);

//inicioESaudacao();
// exisbe catalogo d efilmes
exibitCatalogoDeFilmes($listaDeFilmes);



//filme com menor avaliação

echo menorAvaliacao($listaDeFilmes);
