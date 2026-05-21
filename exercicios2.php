<?php

//Exercicio 1

$idade = 17;

echo "Exercicio 1:\n";

if ($idade >= 18) {
    echo "Maior de idade.";
} else {
    echo "Menor de idade.";
}

echo "\n";
echo "------------------------------\n";

//Exercicio 2

$nota = 7.5;

echo "Exercicio 2:\n";  

if ($nota >= 7) {
    echo "Aprovado.";
} elseif ($nota >= 5) {
    echo "Recuperação.";
} else {
    echo "Reprovado.";
}

echo "\n";
echo "------------------------------\n";

//Exercicio 3

$numero = 15;

echo "Exercicio 3:\n";

$resultaddo = ($numero % 2 == 0) ? "Par" : "Ímpar";
echo $resultaddo;

echo "\n";
echo "------------------------------\n";

//Exercicio 4

$x = 42;
$y = "Olá";
$z = true;

echo "Exercicio 4:\n";

if (gettype($x) == "integer") {
    echo "A variável \$x é do tipo inteiro.";
} elseif (gettype($x) == "string") {
    echo "A variável \$x é do tipo string.";
} else {
    echo "A variável \$x é do tipo booleano. \n";
}

echo "\n";

if (gettype($y) == "integer") {
    echo "A variável \$y é do tipo inteiro.";
} elseif (gettype($y) == "string") {
    echo "A variável \$y é do tipo string.";
} else {
    echo "A variável \$y é do tipo booleano.\n";
}

echo "\n";

if (gettype($z) == "integer") {
    echo "A variável \$z é do tipo inteiro.";
} elseif (gettype($z) == "string") {
    echo "A variável \$z é do tipo string.";
} else {
    echo "A variável \$z é do tipo booleano.\n";
}

echo "\n";
echo "------------------------------\n";

//Exercicio 5

$dia = 3;

echo "Exercicio 5:\n";

switch ($dia) {
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 3:
        echo "Quinta-feira";
        break;
    case 4:
        echo "Sexta-feira";
        break;
    case 5:
        echo "Sábado";
        break;
    case 5:
        echo "Domingo";
        break;
    default:
        echo "Dia inválido.";
}

echo "\n";
echo "------------------------------\n";

//Exercicio 6

$a = 10;
$b = "10";

echo "Exercicio 6:\n";

//Aqui ele compara se as variáveis $a e $b são iguais em valor, //
// sem considerar o tipo de dado.
if ($a == $b) {
    echo "o == está comparando se as variáveis \$a e \$b são iguais em valor, 
    sem considerar o tipo de dado: As variáveis \$a e \$b são iguais em valor.";
} else {
    echo "O == está comparando se as variáveis \$a e \$b são iguais em valor, 
    sem considerar o tipo de dado: As variáveis \$a e \$b são diferentes em valor.";
}
echo "\n";

//Aqui ele compara se as variáveis $a e $b são iguais em valor e tipo de dado.
if ($a === $b) {
    echo "O === está comparando se as variáveis \$a e \$b são iguais em valor e tipo: 
    As variáveis \$a e \$b são iguais em valor e tipo.";
} else {
    echo "O === está comparando se as variáveis \$a e \$b são iguais em valor e tipo: 
    As variáveis \$a e \$b são diferentes em valor ou tipo.";
}
echo "\n";
echo "------------------------------\n";

//Exercicio 7

$peso = 75;
$altura = 1.80;

echo "Exercicio 7:\n";

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Abaixo do peso: " . number_format($imc, 2);
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Peso normal: " . number_format($imc, 2);
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Sobrepeso: " . number_format($imc, 2);
} else {
    echo "Obesidade: " . number_format($imc, 2);
}

echo "\n";
echo "------------------------------\n";

//Exercicio 8

$usuario = "admin";
$senha = "1234";

echo "Exercicio 8:\n";

if ($usuario == "admin" && $senha == "1234") {
    echo "Acesso permitido.";
} else {
    echo "Acesso negado.";
}

echo "\n";
echo "------------------------------\n";

//Exercicio 9

$nome = null;

echo "Exercicio 9:\n";

echo $saudacao = "Olá, " . ($nome ?? "visitante") . "!";

echo "\n";
echo "------------------------------\n";

//Exercicio 10

$preco = 250;

echo "Exercicio 10:\n";

switch ($preco) {
    case ($preco > 500):
        echo "Preço original: R$ " . $preco . " - Desconto de 15%: R$ " . 
        ($preco * 0.15) . " - Preço com desconto: R$ " . ($preco - ($preco * 0.15));
        break;
    case ($preco > 200 && $preco <= 500):
        echo "Preço original: R$ " . $preco . " - Desconto de 10%: R$ " . 
        ($preco * 0.10) . " - Preço com desconto: R$ " . ($preco - ($preco * 0.10));
        break;
    case ($preco <= 200):
        echo "Preço original: R$ " . $preco . " - Desconto de 5%: R$ " . 
        ($preco * 0.05) . " - Preço com desconto: R$ " . ($preco - ($preco * 0.05));
        break;
    default:
        echo "Preço não encontrado.";
}

echo "\n";
echo "------------------------------\n";

//Exercicio 11

$celcius = 36.5;
$tipo = "k";

echo "Exercicio 11:\n";

if ($tipo == "F") {
    $fahrenheit = ($celcius * 9/5) + 32;
    echo $celcius . number_format($fahrenheit, 2);
} else{
    $kelvin = $celcius + 273.15;
    echo $celcius . number_format($kelvin, 2);
}