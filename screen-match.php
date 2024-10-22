<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamneto = 2022;

$somaNotas = 9;
$somaNotas += 6;
$somaNotas += 8;
$somaNotas += 7.5;
$somaNotas += 5;

$notaFilme = $somaNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamneto < 2020;

echo $notaFilme;
echo "\n";
echo $incluidoNoPlano;
echo "\n";


