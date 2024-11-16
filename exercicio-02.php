<?php

/* 1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.

echo "Numeros impares entre 0 e 100: \n \n";

for ($i = 0; $i < 100 ; $i++) { 
    if ($i % 2 == 1) {
        echo "$i \n";
    }
}
*/

/* 2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$altura = $argv[1];
$peso = $argv[2];

$imc = $peso / ($altura**2);

echo "O IMC é igual a $imc";
*/

/* 3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).
*/
date_default_timezone_set('America/Sao_Paulo');

$hora = new DateTime('now');
$horaInt = intval($hora->format('H'));

echo "Agora são " . $hora->format('H:i:s') . "\n \n";

if($horaInt >= 18 && $horaInt < 24){
    echo "Boa noite!";
} elseif ($horaInt >= 0 && $horaInt < 7) {
    echo "Boa madrugada!";
} elseif ($horaInt >= 7 && $horaInt < 12) {
    echo "Bom dia!";
} elseif ($horaInt >= 12 && $horaInt < 18) {  
    echo "Boa tarde!";
} else {
    echo "Olá!";
}