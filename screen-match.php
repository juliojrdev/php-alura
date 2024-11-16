<?php 

echo "Bem-vindo(a) ao Screen Match! \n \n";

$nomeFilme = "Top Gun - Maverick"; //string
$anoLancamento = 2022; //integer number

$qtdNotas = $argc - 1;
$notas = [];

for ($i = 1; $i < $argc; $i++){
    $notas[] = floatval($argv[$i]);
}

/*
$notaFilme = 0;
for ($i = 0; $i < count($notas); $i++) {
    $somaNotas += $notas[$i];
}*/

/*foreach ($notas as $nota) {
    $somaNotas += $nota;
}*/

var_dump($notas);

/*$i = 1;
while ($i < $argc) {
    $somaNotas += $argv[$i];
    $i ++;
}*/

/*$i = $argc;
do {
    $somaNotas += $argv[$i];
    $i--;
} while ($i > 0);*/

$notaFilme = array_sum($notas) / $qtdNotas; 
//$planoPrime = true; //boolean

//$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

//echo "Nome do filme: $nomeFilme \n";
echo "\n \n Nota do filme: $notaFilme";