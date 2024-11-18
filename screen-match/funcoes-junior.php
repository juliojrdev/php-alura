<?php

function inicioESaudacao(){    
    echo " ####################################### \n";
    echo " ###### BEM-VINDO AO SCREEN MATCH ###### \n";
    echo " ####################################### \n";
    echo " ##### LISTA DE FILMES DISPONÍVEIS ##### \n";
    echo " ####################################### \n \n";
}

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

function extraiInicialNomeFilme($nomeFilme){
    $posicao = strpos($nomeFilme, '-');
    $nomeCurto = substr($nomeFilme, 0, $posicao-1);
    return $nomeCurto;
}

function menorAvaliacao($lista){
    $menorNota = 0;
    $nomeFilme = "";
    for($i = 0; $i < count($lista); $i++){
        $filme = $lista[$i];
        $mediaNota = floatval(calculoMediaNotaAvaliacao($filme["notasAvaliacoes"], count($filme["notasAvaliacoes"])));
        if($menorNota == 0){
            $menorNota = $mediaNota;
            $nomeFilme = extraiInicialNomeFilme($filme["nomeFilme"]);
        } elseif ($mediaNota < $menorNota){
            $menorNota = $mediaNota;
            $nomeFilme = extraiInicialNomeFilme($filme["nomeFilme"]);
        }
    }

    return "\n$nomeFilme é o filme com menor avaliação, que foi $menorNota.\n";
}

function criarNomeArquivosJsonFilmes($nomeFilme){
    $partesNome = explode(" ", $nomeFilme);
    $juntaPartesNome = "";
    for($p = 0; $p < count($partesNome); $p++) {
        $juntaPartesNome .=  $partesNome[$p]; //concatena as variaveis tipo string
    }
    return $juntaPartesNome;
}