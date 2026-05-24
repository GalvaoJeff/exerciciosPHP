<?php

//Exericio 1

echo "Exercicio 1 \n";

for ($i = 1; $i < 21; $i++) {
    echo "Número: $i \n";
}

echo "\n";
echo "-------------------\n";

//Exercicio 2

$i = 10;

echo "Exercicio 2 \n";

while ($i >= 0) {
    echo "$i \n";
    $i--;
}

echo "Lançar! \n";

echo "\n";
echo "-------------------\n";

//Exercicio 3

$soma = 0;

echo "Exercicio 3 \n";


for ($i =  2; $i <= 100; $i+=2) {
    $soma += $i;
}

echo "O resultado é: $soma \n";

echo "\n";
echo "-------------------\n";

//Exercicio 4

$numero = 7;
echo "Exercicio 4 \n";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado \n";
}

echo "\n";
echo "-------------------\n";

//Exercicio 5

$n = 6;
$i = 1;
$fatorial = 1;
echo "Exercicio 5 \n";

while ($i <= $n) {
    $fatorial *= $i;
    $i++;
}
echo "$n! = $fatorial \n";

echo "\n";
echo "-------------------\n";

//Exercicio 6

$impar = 1;

echo "Exercicio 6 \n";

for ($i = 1; $i <= 30; $i++) {
    if ($i % 2 != 0) {
        echo "$i \n";
    }
}

echo "\n";
echo "-------------------\n";

//Exercicio 7

$tentativas = [15, -3, 7];
$i = 0;

echo "Exercicio 7 \n";

do {
    $i++;
} while ($tentativas[$i] < 0 || $tentativas[$i] > 10);

echo "O valor valido é: " . $tentativas[$i] . "\n";

echo "\n";
echo "-------------------\n";

//Exercicio 8

$soma = 0;

echo "Exercicio 8 \n";

for ($i = 1; $i >= 1 && $i <= 100; $i++) {
    $soma += $i;
    if ($soma > 200) {
        break;
    }
}

echo "A soma dos números é: $soma e o valor de \$i é: $i \n";

echo "\n";
echo "-------------------\n";

//Exercicio 9

echo "Exercicio 9 \n";

for ($i = 1; $i >= 1 && $i <= 20; $i++) {
    if ($i % 3 == 0) {
        continue;
    }

    echo $i. "\n";

}

echo "\n";
echo "-------------------\n";

//Exercicio 10

$fibonacci = 0;

echo "Exercicio 10 \n";

for ($i = 0; $i < 15; $i++) {
    if ($i == 0) {
        $fibonacci = 0;
    } elseif ($i == 1) {
        $fibonacci = 1;
    } else {
        $fibonacci = $fibonacci + $fibonacci;
    }

    echo "$fibonacci \n";
}

echo "\n";
echo "-------------------\n";