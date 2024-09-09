<?php
//contar até 15
$contador = 1;
while($contador < 15){
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}

//agora utilizando o for em vez do while
for ($contador = 1; $contador<=15; $contador++){
    echo "#$contador" . PHP_EOL;
}

//continue e break. Continue ele pura para a próxima iteração, enquanto o break faz o loop inteiro parar. 
for ($contador = 1; $contador<=15; $contador++){
    if($contador == 13){
        continue;
    }
    if($contador == 14){
        echo "#$contador" . PHP_EOL;
        break;
    }
    echo "#$contador" . PHP_EOL;
}