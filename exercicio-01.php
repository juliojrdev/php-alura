<?php 

echo "Bem-vindo(a) ao Screen Match! <br>";

$nomeFilme = $argv[1] ?? "Não infomrado"; //string
$anoLancamento = $argv[2] ?? "Não informado"; //integer number
$notaFilme = ($argv[3] + $argv[4] + $argv[5]) /3 ?? "Não informado";  
$planoPrime = $argv[6]; //boolean



echo "Nome do filme: $nomeFilme <br>";
echo "Ano de Lnaçamento : $anoLancamento <br>";
echo "Nota do filme: $notaFilme <br>";
if ($planoPrime == "true"){
    echo "Conteúdo DISPONÍVEL para seu plano.";
}else{
    echo "Conteúdo INDISPONÍVEL para seu plano.";
}