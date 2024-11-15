<?php 

echo "Bem-vindo(a) ao Screen Match! \n \n";

$nomeFilme = "Top Gun - Maverick"; //string
$anoLancamento = 2022; //integer number

$qtdNotas = $argc - 1;
$somaNotas = 0;

/*for ($i = 1; $i < $argc; $i++){
    $somaNotas += $argv[$i];
}*/

/*$i = 1;
while ($i < $argc) {
    $somaNotas += $argv[$i];
    $i ++;
}*/

$i = $argc;
do {
    $somaNotas += $argv[$i];
    $i--;
} while ($i > 0);

$notaFilme = $somaNotas / $qtdNotas; 
$planoPrime = true; //boolean

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: $nomeFilme \n";
echo "Nota do filme: $notaFilme";