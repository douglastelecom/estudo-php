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
/*
seria parecido com o seguinte código em js

conta1 = {
    nome: Vinicius,
    saldo: 1000
}
*/

//Para acessar o valor
echo $conta1['nome'];
