<?php
/*Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.

1- Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.
*/

$listaNotas = [7, 9, 10, 8, 6, 5, 4, 8];

$listaNotasOrdenadas = $listaNotas;

rsort($listaNotasOrdenadas);

echo "Array original: ";
print_r($listaNotas);

echo "Array ordenado: ";
print_r($listaNotasOrdenadas);

echo "As 3 maiores notas: ";
print_r(array_slice($listaNotasOrdenadas, 0, 3));

echo "\n\n ___________ \n";

// 2- Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.

$stringInicial = "Vinicius Dias,1997,Programador";
$arrayDividida = explode(",", $stringInicial);

print_r($arrayDividida);


echo "\n\n ___________ \n";


// 3- Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

$arrayDeStrings = ["Maria","João","Carol","Ana","Bruno","Filipe","Daniel"];

function ordenarString($array) {
    sort($array);
    return $array;
}

$arrayDeStringsOrdenadas = ordenarString($arrayDeStrings);

echo "Array origina: \n";
print_r($arrayDeStrings);
echo "Array Ordenado: \n";
print_r($arrayDeStringsOrdenadas);