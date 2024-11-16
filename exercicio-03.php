<?php 
//1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5] 

$arrayDuplicado = [1, 2, 2, 3, 4, 4, 5];

$arrayUnico = array_unique($arrayDuplicado); //procura valores duplicados e remove salvando num novo array e amntendo o riginal

print_r($arrayUnico);

/*2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.

Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.*/ 

$notasAlunos = [7,8,9,8,5,6,4,6,7,10];
$i = 1;
foreach ($notasAlunos as $nota) {
    $aprovado = $nota >= 6 ? "Aprovado \n" : "Reprovado \n";
    echo "Aluno $i foi $aprovado";
    $i++;
}

/*3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.*/ 

$contaBancaria = [
    "titular" => "José de Abreu",
    "saldo" => 12976.59,
];

print_r($contaBancaria);

echo "\n Conta bancaria de $contaBancaria[titular] tem saldo de R$ $contaBancaria[saldo].\n";

/* 4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.*/ 

$nomeFamiliares = ["Maria", "Joao", "Pedro"];

echo "\n\n---------------------\n Nome dos Familiares:\n";
foreach ($nomeFamiliares as $nome) {
    print_r("\n $nome");
}

$nomeFamiliares[] = "Junior";
$nomeFamiliares[] = "Caroline";

echo "\n\n---------------------\n Nome dos Familiares:\n";
foreach ($nomeFamiliares as $nome) {
    print_r("\n $nome");
}