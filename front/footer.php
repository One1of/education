<?php
function sum($a,$b /*параметры функции*/){  // пользовательская функция
    echo $a + $b;
    echo "<br>";
}
 

function sum1($a = 1,$b = 1 /*параметры по умолчанию*/){
    echo $a;
    echo "<br>";
    echo $b;
}

function sum2($a = 1,$b = 1){
    echo "<br>";
    return $a - $b; // возвращаемое значение(возвращает полученый результат)
}

