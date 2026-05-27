<?php

//Exercício 11

$nomes = "Jão, Maria, Pedro, Ana";

echo "Exercício 11 \n";

$arrayNomes = explode(", ", $nomes);

for ($i = 0; $i < count($arrayNomes); $i++) {
    echo $arrayNomes[$i] . "\n";
}

echo "\n";
echo "------------------------------\n";

//Exercício 12

$array = ["HTML", "CSS", "JavaScript", "PHP"];

echo "Exercício 12 \n";

$arrayString = implode(" | ", $array);

echo $arrayString . "\n";

echo "\n";
echo "------------------------------\n";

//Exercício 13

$numero = 42;

echo "Exercício 13 \n";

echo str_pad($numero, 5, "0", STR_PAD_LEFT) . "\n";
echo str_pad($numero, 10, ".");

echo "\n";
echo "------------------------------\n";

//Exercício 14

$valor = 1234567.891;

echo "Exercício 14 \n";

echo "R$ " . number_format($valor, 2, ",", ".");

echo "\n";
echo "------------------------------\n";

//Exercício 15

$string = "arquivo_relatorio.pdf";

echo "Exercício 15 \n";

echo "A String começa com: " . strstr($string, "_", true) . "\n";
echo "A String termina com: " . strstr($string, ".pdf") . "\n";
echo "\n";

echo "Outra forma de fazer: \n";
echo "\n";

$resultado = strstr($string, "_", true) . "\n";

if ($resultado !==false){
    echo "A String começa com: " . $resultado;
} else {
    echo "A String não começa com: " . $resultado;
}

$resultado = strstr($string, ".pdf") . "\n";

if ($resultado !==false){
    echo "A String termina com: " . $resultado;
} else {
    echo "A String não termina com: " . $resultado;
}

echo "\n";
echo "------------------------------\n";

//Exercício 16

$verSub = "O PHP eh uma linguagem de programação server-side";

echo "Exercício 16 \n";

if (str_contains($verSub, "server-side")){
    echo "A Substring Contém server-side! \n";
} elseif (str_contains($verSub, "client-side")) {
    echo "A Substring contém client-side!";
}   

if (str_contains($verSub, "server-side")){
    echo "A Substring Não Contém Client-side! \n";
} elseif (str_contains($verSub, "client-side")) {
    echo "A Substring contém Server-side!";
}

echo "\n";
echo "------------------------------\n";

//Exercício 17

$coisas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

echo "Exercício 17 \n";

$embagaiar = str_shuffle($coisas);

echo substr($embagaiar, 0, 8);

echo "\n";
echo "------------------------------\n";

//Exercício 18

$contar = "PHP é uma linguagem popular para desemvolvimento web";

echo "Exercício 18 \n";

setlocale(LC_ALL, 'pt_BR.UTF-8');
echo str_word_count($contar). "\n";

print_r(str_word_count($contar, 1));
echo "\n";


echo "Outra forma: " . "\n";

$palavras = explode(" ", $contar);
echo count($palavras) . "\n";
print_r($palavras);
echo "\n";

$arrayPalavras = str_split($contar);
print_r($arrayPalavras);

echo "Fim dos Exercícios";