<?php

//Exercício 1

$nome = "Jeferson";
$idade = 31;
$altura = 1.69;

echo "Exercício 1: \n";
echo "Meu nome é " . $nome . ", tenho " . $idade . " anos e minha altura é " . $altura . " metros. \n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 2

$valor1 = 42;
$valor2 = 3.14;
$valor3 = "PHP";
$valor4 = true;
$valor5 = null;

/*gettype($valor1);
gettype($valor2);
gettype($valor3);
gettype($valor4);
gettype($valor5);
*/

echo "Exercício 2: \n";

echo "O tipo de $valor1 é: " . gettype($valor1) . "\n";
echo "O tipo da variável $valor2 é: " . gettype($valor2) . "\n";
echo "O tipo da variável $valor3 é: " . gettype($valor3) . "\n";
echo "O tipo da variável $valor4 é: " . gettype($valor4) . "\n";    
echo "O tipo da variável $valor5 é: " . gettype($valor5) . "\n";
echo "\n";    

echo "----------------------------------------------------------------\n";

//Exercício 3

$peso = 70.5;
$altura = 1.75;

$imc = $peso / ($altura * $altura);
number_format($imc, 2);

echo "Exercício 3: \n";
echo "O IMC é: " . number_format($imc, 2) . "\n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 4

$a = 10;
$b = 20;

echo "Exercício 4: \n";
echo "O valor de a é: $a e o valor de b é: $b \n";

$b = $b - $a;
echo "Agora o valor de b é: $b \n";

$a = $a + $a;
echo "Agora o valor de a é: $a \n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 5

$celcius = 25;
$fahrenheit = ($celcius * 9/5) + 32;

echo "Exercício 5: \n";
echo "$celcius graus Celsius é igual a $fahrenheit graus Fahrenheit. \n";
$kelvin = $celcius + 273.15;
echo "$celcius graus Celsius é igual a $kelvin graus Kelvin. \n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 6

$x = "10";
$y = 10;

echo "Exercício 6: \n";

//Compara se o valor de $x é igual ao valor de $y, ignorando o tipo
$x == $y;
echo "Comparação do valor se é igual ignorando o tipo usando ==: $x == $y é " . ($x == $y ? "verdadeiro" : "falso") . "\n";
//Compara se o valor de $x é igual ao valor de $y, considerando o tipo
$x === $y;
echo "Comparação do valor se é igual considerando o tipo usando ===: $x === $y é " . ($x === $y ? "verdadeiro" : "falso") . "\n";
//Compara se o valor de $x é diferente do valor de $y, ignorando o tipo
$x != $y;
echo "Comparação do valor se é diferente ignorando o tipo usando !=: $x != $y é " . ($x != $y ? "verdadeiro" : "falso") . "\n";
//Compara se o valor de $x é diferente do valor de $y, considerando o tipo
$x !== $y;
echo "Comparação do valor se é diferente considerando o tipo usando !==: $x !== $y é " . ($x !== $y ? "verdadeiro" : "falso") . "\n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 7


echo "Exercício 7: \n";

$numero = -5 % 6;
if ($numero > 0) {
    echo "O número $numero é positivo. \n";
} elseif ($numero < 0) {
    echo "O número $numero é negativo. \n";
} else {
    echo "O número $numero é zero. \n";
}
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 8

$valor = "123abc";
$valor2 = "";
$valor3 = "0";
echo "Exercício 8: \n";

$valorInt = (int)$valor;
echo "O valor convertido de $valor para inteiro é: $valorInt \n";
$valorFloat = (float)$valor;
echo "O valor convertido de $valor para float é: $valorFloat \n";
$valorBool = (bool)$valor;
echo "O valor convertido de $valor para boolean é: " . ($valorBool ? "true" : "false") . "\n";
$valor2Int = (int)$valor2;
echo "O valor convertido de $valor2 para inteiro é: $valor2Int \n";
$valor2Float = (float)$valor2;
echo "O valor convertido de $valor2 para float é: $valor2Float \n";
$valor2Bool = (bool)$valor2;
echo "O valor convertido de $valor2 para boolean é: " . ($valor2Bool ? "true" : "false") . "\n";
$valor3Int = (int)$valor3;
echo "O valor convertido de $valor3 para inteiro é: $valor3Int \n";
$valor3Float = (float)$valor3;
echo "O valor convertido de $valor3 para float é: $valor3Float \n";
$valor3Bool = (bool)$valor3;
echo "O valor convertido de $valor3 para boolean é: " . ($valor3Bool ? "true" : "false") . "\n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 9

$total = 100;
echo "Exercício 9: \n";

$total += 50;
echo "Após adicionar 50, o total é: $total \n";
$total -= 30;
echo "Após subtrair 30, o total é: $total \n";
$total *= 2;
echo "Após multiplicar por 2, o total é: $total \n";
$total /= 4;
echo "Após dividir por 4, o total é: $total \n";
$total %= 7;
echo "Após obter o resto da divisão por 7, o total é: $total \n";
$totalReais = (float) $total;
echo $totalReais .=" Reais \n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 10

$possuiCNH = true;
$estaBebado = false;
echo "Exercício 10: \n";

if ($possuiCNH && !$estaBebado) {
    echo "Pode dirigir. \n";
} else {
    echo "Não pode dirigir. Precisa de carona ou Uber! \n";
}
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 11

// Valor inicial do contador
$contador = 5;
echo "Exercício 11: \n";
echo "O valor inicial do contador é: $contador \n";

// Aqui ele incrementa o contador usando o operador de pós-incremento, ou seja,
// ele primeiro retorna o valor atual do contador e depois incrementa o contador em 1.
$contador++;
echo "Após o incremento, o contador é: $contador \n";

// Aqui ele decrementa o contador usando o operador de pós-decremento, ou seja,
// ele primeiro retorna o valor atual do contador e depois decrementa o contador em 1.
++$contador;
echo "Após o pré-incremento, o contador é: $contador \n";

// Aqui ele decrementa o contador usando o operador de pós-decremento, ou seja,
// ele primeiro retorna o valor atual do contador e depois decrementa o contador em 1.
$contador--;
echo "Após o decremento, o contador é: $contador \n";

// Aqui ele decrementa o contador usando o operador de pré-decremento, ou seja,
// ele primeiro decrementa o contador em 1 e depois retorna o valor atual do contador.
--$contador;
echo "Após o pré-decremento, o contador é: $contador \n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 12

$produto = "Notebook";
$preco = 3500.99;

echo "Exercício 12: \n";

echo "o produto $produto custa: R$ $preco \n";
echo "\n";
echo 'O produto ' . $produto . ' custa: R$ ' . $preco . "\n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 13

$precoOriginal = 250.00;
$desconto = 15;
$precoComDesconto = $precoOriginal - ($precoOriginal * $desconto / 100);

echo "Exercício 13: \n";

echo "O preço original é: R$ $precoOriginal \n";
echo "O desconto é: $desconto% \n";
echo "O preço com desconto é: R$ $precoComDesconto \n";
echo $precoComDesconto = ($precoComDesconto < 200) ? "Compra Barata!" : "Compra Cara!" . "\n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 14

$nome = "Afonso";
$idade = 25;
$clerigo = true;

echo "Exercício 14: \n";

// Verificando $nome (Afonso - string)
echo '$nome (' . $nome . '): ';
echo 'is_int? '     . (is_int($nome)     ? 'Sim' : 'Não') . ' | ';
echo 'is_numeric? ' . (is_numeric($nome) ? 'Sim' : 'Não') . ' | ';
echo 'is_string? '  . (is_string($nome)  ? 'Sim' : 'Não') . "\n";

// Verificando $idade (25 - inteiro)
echo '$idade ("' . $idade . '"): ';
echo 'is_int? '     . (is_int($idade)     ? 'Sim' : 'Não') . ' | ';
echo 'is_numeric? ' . (is_numeric($idade) ? 'Sim' : 'Não') . ' | ';
echo 'is_string? '  . (is_string($idade)  ? 'Sim' : 'Não') . "\n";

// Verificando $clerigo (true - booleano)
echo '$clerigo (' . ($clerigo ? 'true' : 'false') . '): ';
echo 'is_int? '     . (is_int($clerigo)     ? 'Sim' : 'Não') . ' | ';
echo 'is_numeric? ' . (is_numeric($clerigo) ? 'Sim' : 'Não') . ' | ';
echo 'is_string? '  . (is_string($clerigo)  ? 'Sim' : 'Não') . "\n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 15

$usuario = "admin";
$loginConta = null;

echo "Exercício 15: \n";

//Aqui ele verifica se a variável $usuario tem um valor definido.
//Se tiver, ele exibe o valor de $usuario. Caso contrário, ele exibe "Convidado".
echo $usuario ?? "Convidado";
echo "\n";
//Aqui ele verifica se a variável $loginConta tem um valor definido.
//Se tiver, ele exibe o valor de $loginConta. Caso contrário, ele exibe "Não logado".
echo $loginConta ?? "Não logado \n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 16

$valorTotal = 1899.90;
$numParcelas = 6;

echo "Exercício 16: \n";

$valorParcela = $valorTotal / $numParcelas;
echo "O valor total é: R$ $valorTotal \n";
echo "O número de parcelas é: $numParcelas \n";
echo "O valor de cada parcela é: R$ ". $valorParcela ."\n";

echo "O Valor arrendondado floor é de R$ " .floor($valorParcela) . 
" Reais para cada parcela, com o valor total de R$ " . 
floor($valorParcela) * $numParcelas . " e um valor restante de R$ " . 
($valorTotal - (floor($valorParcela) * $numParcelas)) . "\n";

echo "O Valor arrendondado ceil é de R$ " .ceil($valorParcela) . 
" Reais para cada parcela, com o valor total de R$ " . 
ceil($valorParcela) * $numParcelas . " e um valor restante de R$ " . 
($valorTotal - (ceil($valorParcela) * $numParcelas)) . "\n";

echo "O Valor arrendondado round é de R$ " .round($valorParcela) . 
" Reais para cada parcela, com o valor total de R$ " . 
round($valorParcela) * $numParcelas . " e um valor restante de R    $ " . 
($valorTotal - (round($valorParcela) * $numParcelas)) . "\n";
echo "\n";

echo "----------------------------------------------------------------\n";

//Exercício 17

$nota1 = 7.5;
$nota2 = 8.0;  
$nota3 = 6.5;

echo "Exercício 17: \n";

$media = ($nota1 + $nota2 + $nota3) / 3;
echo $media = ($media >= 7) ? "Aprovado com média $media" : 
(($media >= 5) ? "Recuperação com média $media" : 
"Reprovado com média $media") . "\n";

//Fim dos exercícios :D
echo "----------------------------------------------------------------\n";