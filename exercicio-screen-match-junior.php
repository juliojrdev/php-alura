<?php
/*
Desenvolvido por Julio C. S. Junior - Nov. 2024
Algoritmo desenvolvido para exercício prático do curso de PHP Orientado a Objeto da plataforma Alura ministrado pelo Prof. Vinicius Dias
*/

function inicioESaudacao(){    
    echo " ####################################### \n";
    echo " ###### BEM-VINDO AO SCREEN MATCH ###### \n";
    echo " ####################################### \n";
    echo " ##### LISTA DE FILMES DISPONÍVEIS ##### \n";
    echo " ####################################### \n \n";
}

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

function adicionarFilmesNaLista(&$catalogo, $novoFilme) { 
    //o & dá mpermissão para que função altere o array original
    return $catalogo[] = $novoFilme;
}

function calculoMediaNotaAvaliacao ($notas, $qtdNotas){
    $somadordeNotas = array_sum($notas);
    return $somadordeNotas / $qtdNotas;
}

function planoParaAcessar($plano, $lancamento){
    return $plano && $lancamento ? "apenas para plano Prime" : "todos os planos";
}

function lancamentoSimOuNao($ano){
    $anoAtual = Date('Y');
    return ($anoAtual - $ano) <= 1 ? "\n        Este Filme é Lançamento!" : " ";
}

function exibitCatalogoDeFilmes($lista){
    for($i = 0; $i < count($lista); $i++){
        $filme = $lista[$i];
        $num = $i + 1;
        echo "  ______________ FILME $num ______________ \n \n";
        echo "  Titulo: ".$filme["nomeFilme"]."\n"; 
        echo "  Lançamento: ".$filme["anoLancamento"]."\n"; 
        echo "  Genero: ".$filme["genero"]."\n"; 
        $mediaNotaAvaliacao = floatval(calculoMediaNotaAvaliacao($filme["notasAvaliacoes"], count($filme["notasAvaliacoes"])));
        echo "  Nota de Avaliação: $mediaNotaAvaliacao\n";
        echo "  ".lancamentoSimOuNao($filme["anoLancamento"]). "\n";
        echo "  Filme disponível ". planoParaAcessar($filme["planoPrime"], lancamentoSimOuNao($filme["anoLancamento"])) . "\n";
        echo "  _____________________________________  \n";
    }
}

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

inicioESaudacao();
// exisbe catalogo d efilmes
exibitCatalogoDeFilmes($listaDeFilmes);