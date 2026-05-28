<?php

//Exercício 1:

$frutas = ["Morango", "Amora", "Framboesa", "Mirtilo", "Maçã"];

echo "Exercício 1 \n";

foreach ($frutas as $fruta){
  // $fruta = implode(", ", $frutas);
    echo $fruta."\n";
    
}

echo "\n";
echo "------------------------------\n";

//Exercício 2

$users = [
    ["Nome" => "João", "Idade" => 18],
    ["Nome" => "Jeff", "Idade" => 31],
    ["Nome" => "Jusé", "Idade" => 8],
    ["Nome" => "Juvenal", "Idade" => 27]
];

echo "Exercício 2 \n";

foreach ($users as $key => $value) {
    echo $users[$key]["Nome"].": ";
    echo $users[$key]["Idade"]."\n";
}

echo "\n";
echo "------------------------------\n";

//Exercício 3

$cores = ["Vermelho", "Azul", "Verde"];

echo "Exercício 3: \n";

print_r(array_push($cores,"Preto"));
print_r(array_unshift($cores, "Amarelo"));
echo $cores[0];

echo "\n";
echo "------------------------------\n";

//Exercício 4

$numeros = [10, 20, 30, 40];

echo "Exercício 4: \n";

array_shift($numeros) . "\n";
array_pop($numeros) . "\n";
print_r ($numeros);

echo "\n";
echo "------------------------------\n";

//Exercício 5

$numbers = [5, 10, 1, 15, 9, 20, 11, 25];

echo "Exercício 5: \n";

echo count($numbers);

$maiores = array_filter($numbers, fn($n) => $n > 10);
echo "\n";
echo count($maiores) . "\n";
print_r ($maiores);

echo "\n";
echo "------------------------------\n";

//Exercício 6:

$cidades = ["São Paulo", "Rio de Janeiro", "Curitiba", "Salvador"];

echo "Exercício 6: \n";

var_dump(in_array("Curitiba", $cidades));
var_dump(array_search("Curitiba", $cidades));

echo "\n";
echo "------------------------------\n";

//Exercício 7:

$notas = [7.5, 3.2, 9.8, 5.0, 8.1, 6.7];

echo "Exercício 7 \n";


sort($notas);
print_r($notas);
echo "\n";
rsort($notas);
print_r($notas);

echo "\n";
echo "------------------------------\n";

//Exercício 8

$valorProduto = [ 
    ["Produto" => "Batata", "Valor" => 07.99],
    ["Produto" => "Cenoura", "Valor" => 05.89],
    ["Produto" => "Tomate", "Valor" => 10.99],
    ["Produto" => "Cebola", "Valor" => 04.99],
    ["Produto" => "Repolho", "Valor" => 06.00]

];

echo "Exercício 8: \n";

//Aqui eu to ordenando usaando uma função pré-definida do php.
uasort($valorProduto, fn($a, $b) => $a["Valor"] <=> $b["Valor"]);

foreach($valorProduto as $valor){
    echo $valor["Valor"] . "\n";
}

echo "\n";
echo "------------------------------\n";

//Exercício 9:

$letras = ["A", "B", "C", "D", "E", "F", "G", "H"];

echo "Exercício 9: \n";

$algumasLetras = array_slice($letras, 2, 4);

print_r($algumasLetras);

echo "\n";
echo "------------------------------\n";

//Exercícios 10:



echo "Exercícios 10: \n";