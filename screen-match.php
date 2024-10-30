<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
//$nomeFilme = "Thor: Ragnarok";
//$nomeFilme = "Se beber não case";

//$anoLancamento = $argv[1] ?? 2022;  //$argv recebe um valor informado pelo usuário, 1 é a posição dentro do array sendo 0 o nome do arquivo a ser executado no terminal
$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador ++) {
    $somaDeNotas += $argv[$contador];
}

//$contador = 1;
//while ($argv[$contador] != 0) {
//    $somaDeNotas += $argv[$contador++];
//}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: " . $notaFilme . "\n";
echo "Ano de lançamento: $anoLancamento\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento!\n";
} else if ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo!\n";
} else {
    echo "Esse filme não é um lançamento!\n";
}

$genero =  match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

echo "$argc\n"; // exibe a quantidade que foi informada dentro do $argv