<?php
//Para adicionar um elemento a um array é bem simples, basta chamar o array vazio e igualá-lo a um numero
$idadeList = [21, 23, 19, 25, 30, 41, 18];
$idadeList[] = 1000;
foreach($idadeList as $idade ){
    echo $idade . PHP_EOL;
}
