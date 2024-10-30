<?php

/* 1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.

$numero = 0;


for ($contador = 0; $contador <= 100; $contador++) {
    if ($numero % 2 != 0) {
        echo $numero."\n";
    }
    $numero++;
}
*/

// 2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$altura = 1.70;
$peso = -2;


$IMC = $peso / ($altura*$altura); // ou pode ser definido ao quadrado com **2

echo "$IMC\n";

switch ($IMC){
    case $IMC < 18.5:
        echo "Abaixo do peso normal\n";
        break;
    case $IMC >= 18.5 && $IMC <= 24.9:
        echo "Peso normal\n";
        break;
    case $IMC >= 25 && $IMC <= 29.9:
        echo "Excesso de peso\n";
        break;
    case $IMC >= 30 && $IMC <= 34.9:
        echo "Obesidade classe 1\n";
        break;
    case $IMC >= 35 && $IMC <= 39.9:
        echo "Obesidade classe 2\n";
        break;
    case $IMC >= 40:
        echo "Obesidade classe 3\n";
        break;
    default:
        echo "IMC fora do intervalo de classificação!\n";
        break;
}







