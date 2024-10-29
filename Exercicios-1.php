<?php

/* 1 

$nomeUsuario = "Vinicius\n";

echo $nomeUsuario;
*/

/* 2

$nota1 = 3;
$nota2 = 3;
$nota3 = 3;

$media = ($nota1 + $nota2 + $nota3)/3;

echo "A média das notas é $media\n";

*/

/* 3

$metros = $argv[1] ?? 1;

$cm = $metros * 100;

echo "$metros metros equivalem a $cm centímetros.";

*/

// 4

$ano = $argv[1] ?? 2024;

if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.\n";
} else {
    echo "$ano não é bissexto.\n";
}



/* 5

$celsius = $argv[1];

$fahrenheit = ($celsius * 1.8) + 32;

echo "A temperatura em Fahrenheit é de {$fahrenheit} F\n";

*/
