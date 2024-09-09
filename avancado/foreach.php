<?php
//array associativo, parecido com os objetos do javascript
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

//usando foreach
foreach($contascorrentes as $conta){
    echo $conta['nome'] . PHP_EOL;
}

//para pegar o indice também
foreach($contascorrentes as $cpf => $conta){
    echo $conta['nome'];
    echo " Seu índice é: $cpf" . PHP_EOL;
}

echo $conta1['nome'];