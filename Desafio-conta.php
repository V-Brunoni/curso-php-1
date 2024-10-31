<?php


$titular = "Vinicius Brunoni";
$saldo = 1000;
$menu = 0;

echo "**************\n";
echo "Titular: $titular\n";
echo "Saldo atual: R$ $saldo\n";
echo "**************\n";

do {

    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n\n";

    $menu = (int) fgets(STDIN);
    echo "\n";

    switch ($menu) {
        case 1:
            echo "**************\n";
            echo "Titular: $titular\n";
            echo "Saldo atual: R$ $saldo\n";
            echo "**************\n";
            break;
        case 2:
            echo "Qual valor deseja sacar?\n";
            $valorSacar = (float) fgets(STDIN);
            echo "\n";
            if ($valorSacar > $saldo){
                echo "Saldo insuficiente!\n\n";
            } else {
                $saldo -= $valorSacar;
            }
            echo "**************\n";
            echo "Saldo atual: R$ $saldo\n";
            echo "**************\n";
            break;
        case 3:
            echo "Quanto deseja depositar?\n";
            $valorDep = (float) fgets(STDIN);
            echo "\n";
            if ($valorDep <= 0){
                echo "Insira um valor valido!\n";
            } else {
                $saldo += $valorDep;
            }
            echo "**************\n";
            echo "Saldo atual: R$ $saldo\n";
            echo "**************\n";
            break;
        case 4:
            echo "Operação finalizada!\n";
            break;
        default:
            echo "Opção Invalida!\n\n";
            break;
    }
} while ($menu != 4);
