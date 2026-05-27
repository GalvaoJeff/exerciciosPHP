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