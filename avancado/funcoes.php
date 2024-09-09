<?php

$conta1 = [
    'nome' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'nome' => 'Maria',
    'saldo' => 10000
];
$conta3 = [
    'nome' => 'Alberto',
    'saldo' => 300
];

$contascorrentes = [$conta1, $conta2, $conta3];

function somarTodosValores(array $contasCorrentes){
    $contaTotal = 0;
    foreach($contasCorrentes as $conta){
        $contaTotal += $conta['saldo'];
    }
    return $contaTotal;
};

echo "O valor total foi " . somarTodosValores($contascorrentes);