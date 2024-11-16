<?php

$conta = [
    "titular" => "Julio Cesar",
    "saldo" => 1000,
];

$op = 1;
while ($op != 4) {
    switch ($op) {
        case 1:
            echo "**************************\n";
            echo "  Titular: " . $conta["titular"] . "\n";
            echo "  Saldo aual: R$ " . $conta["saldo"] . "\n";
            echo "**************************\n";
            echo "          MENU:           \n";
            echo " 1. Consultar saldo atual\n";
            echo " 2. Sacar valor\n";
            echo " 3. Depositar valor\n";
            echo " 4. Sair\n";
            echo "**************************\n";
            echo " Digite uma opção: ";
            $op = trim(fgets(STDIN)); //captura a opção digitada pelo usuário
            echo "__________________________\n";
            break;
        case 2:
            echo "**************************\n";
            echo "          SACAR           \n";
            echo " Quanto deseja SACAR? ";
            $saque = trim(fgets(STDIN)); //captura a opção digitada pelo usuário
            if($conta["saldo"] >= $saque){
                $conta["saldo"] -= $saque;
            }else{
                echo "__________________________\n";
                echo "\n";
                echo " [!] Saldo insuficiente! \n";
                echo "__________________________\n";
            }
            $op = 1;
            break;
        case 3:
            echo "**************************\n";
            echo "        DEPOSITAR         \n";
            echo " Quanto deseja DEPOSITAR? ";
            $deposito = trim(fgets(STDIN)); //captura a opção digitada pelo usuário
            $conta["saldo"] += $deposito;
            $op = 1;
            break;
        case 4:
            $op = 4;
            break;
        default:
            echo "**************************\n";
            echo "   [!] Opção inválida...  \n";
            echo "__________________________\n";
            $op = 1;
            break;
    }
}

echo "**************************\n";
echo "  [!] Você fez logout...  \n";
echo "         Até mais!        \n";
echo "__________________________\n";