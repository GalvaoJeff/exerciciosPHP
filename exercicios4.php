<?php

//Exerício 1

$frase = "PHP eh divertido!";
$frase2 = "PHP é divertido!";

echo "Exercício 1: \n";


echo strlen($frase) . "\n";
echo strlen($frase2) . "\n";
echo mb_strlen($frase2) . "\n";

echo "\n";
echo "------------------------------\n";

//Exerício 2

$hello = "Hello World!";

echo "Exercício 2: \n";

echo "Frase normal: " . $hello . "\n";
echo "Frase em maiúsculas: " . strtoupper($hello) . "\n";
echo "Frase em minúsculas: " . strtolower($hello) . "\n";

echo "\n";
echo "------------------------------\n";

//Exerício 3

$string1 = "programação web";
$string2 = "curso de desenvolvimento web";

echo "Exercício 3: \n";

echo ucfirst($string1) . "\n";
echo ucwords($string2) . "\n";

echo "\n";
echo "------------------------------\n";

//Exerício 4

$extrair = "abcdefghij";
$i = 0;

echo "Exercício 4: \n";

function exibir($string, $posicao) {
    return substr($string, $posicao, 1);
}

while (strlen($extrair) > 0 && $i < 3) {
    echo exibir($extrair, 0);
    $extrair = substr($extrair, 1);
    $i++;
    
}

echo "\n";

while (strlen($extrair) > 0 && $i <= 7) {
    echo exibir($extrair, 0);
    $extrair = substr($extrair, 1);
    $i++;
    
}

echo "\n";

while (strlen($extrair) > 0 && $i <= 10) {
    echo exibir($extrair, 0). "\n";
    $extrair = substr($extrair, 1);
    $i++;
    
}

// Outra forma de fazer o exercício 4

echo "outro jeito de fazer o exercício 4: \n";

$extrair = "abcdefghij";

echo substr($extrair, 0, 3) . "\n";
echo substr($extrair, 3, 5) . "\n";
echo substr($extrair, -2) . "\n";

echo "\n";
echo "------------------------------\n";

//Exerício 5

$string = "O rato roeu a roupa do rei de Roma";

echo "Exercício 5: \n";

echo strpos($string, "roupa") . "\n";
echo count(explode("r", $string)) . "\n";

echo "\n";
echo "------------------------------\n";

//Exerício 6

$texto = "Eu gosto de Java";
$texto2 = "Eu gosto de JAVA e java";

echo "Exercício 6: \n";

echo $texto = str_replace("Java", "PHP", $texto) . "\n";
echo $texto2 = str_ireplace("Java", "PHP", $texto2) . "\n";


echo "\n";
echo "------------------------------\n";

//Exerício 7

$string = " Olá, Mundo! ";

echo "Exercício 7: \n";

echo trim($string) . "\n";
echo ltrim($string) . "\n";
echo rtrim($string) . "\n";

echo "\n";
echo "------------------------------\n";

//Exerício 8

echo str_repeat("-", 40) . "\n";
echo str_repeat("*", 20) . "\n";

echo "\n";
echo "------------------------------\n";

//Exerício 9

$string = "arara";


echo strrev ("Hello World!") . "\n";

function ePalindromo($string) {
    $string = strtolower(str_replace(" ", "", $string));
    return $string == strrev($string);
}

echo ePalindromo($string) ? $string ."É um palíndromo" : "Não é um palíndromo";


echo "\n";
echo "------------------------------\n";

//Exerício 10

echo substr_count("banana", "na") . "\n";
echo substr_count("banana", "a") . "\n";

echo "Fim dos exercícios!";