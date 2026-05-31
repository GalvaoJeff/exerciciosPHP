<?php

//Exercício 13:

$salarios = [2500, 3200, 1800, 4500, 2900, 3700];

echo "Exercício 13 \n";

$soma = array_sum($salarios);
print_r($soma);

echo "\n";

$media = array_sum($salarios) / count($salarios);
print_r($media);

echo "\n";

// $maior = array_filter($salarios, fn($n) => $n);
// print_r($maior);

print_r(max($salarios));
echo "\n";
print_r(min($salarios));

echo "\n";
echo "------------------------------\n";

//Exercício 14:

$idades = [12, 18, 25, 15, 30, 17, 21, 16];

echo "Exercício 14: \n";

$maiorIdade = array_values((array_filter($idades, fn($n) => $n >= 18)));
print_r($maiorIdade);

echo "\n";
echo "------------------------------\n";

//Exercícios 15:

$precos = [100, 250, 80, 320, 150];

echo "Exercícios 15: \n";

print_r($precos);

$comDesconto = array_map(fn($n) => $n - ($n * 10 /100), $precos);

print_r($comDesconto);

echo "\n";
echo "------------------------------\n";

//Exercício 16:

$alunos = [
    ["Nome:" => "João", "Nota 1" => 8.2, "Nota 2" => 7.0, "Nota 3" => 9.1],
    ["Nome:" => "José", "Nota 1" => 3.4, "Nota 2" => 6.2, "Nota 3" => 7.3],
    ["Nome:" => "Maria", "Nota 1" => 9.5, "Nota 2" => 8.7, "Nota 3" => 9.9],
    ["Nome:" => "Ana", "Nota 1" => 7.0, "Nota 2" => 9.2, "Nota 3" => 7.5]
];

echo "Exercício 16: \n";

foreach($alunos as $key => $value){
    $media = ($alunos[$key]["Nota 1"] + $alunos [$key]["Nota 2"] + $alunos[$key]["Nota 3"]) / 3;
    print_r($media);
    
    echo "O Aluno " . $alunos[$key]["Nome:"] . " está: " . ($media >= 7 ? "Aprovado \n" : "Repovado \n");
    echo "\n";
}

echo "\n";
echo "------------------------------\n";

//Exercício 17:

$estoque = ["Camiseta" => 50, "Calça" => 30, "Tênis" => 15, "Boné" => 80, "Meia" => 100];

echo "Exercício 17: \n";

$produto = array_keys($estoque);
print_r($produto);
echo "\n";
$quantidade = array_values($estoque);
print_r($quantidade);

echo "\n";
echo "------------------------------\n";

//Exercício 18:

$disciplinas = ["PHP", "JavaScript", "Python", "Java"];
$notas = [8.5, 7.0, 9.2, 6.8];

echo "Exercício 18: \n";

$combinaArrays = array_combine($disciplinas, $notas);
print_r($combinaArrays);

/*O array_combine() permite unir 2 arrays só em 1 array associativo, 
por exemplo, definindo qual valor será a chave e qual será o valor desta chave,
e os tamanhos deles tem de ser igual.
Já o array_merge junta apenas os valores dos arrays em 1 array simples só colocando os valorem sem sequência,
podendo ser mais que 2.*/

echo "\n";
echo "------------------------------\n";

//Exercício 19:

$itens = [
    ["Nome:" => "Mouse", "Preco" => 50],
    ["Nome:" => "Teclado", "Preco" => 120],
    ["Nome:" => "Monitor", "Preco" => 900],
    ["Nome:" => "Headset", "Preco" => 200]
];

echo "Exercício 19: \n";

$total = array_reduce($itens, fn($carry, $item) => $carry + $item["Preco"], 0);

print_r($total);


echo "Fim dos Exercícios";