<?php
$a = -10 % 3; //деление по модулю(остаток от деления 1)(ответ принимает + либо - от делимого значения)
$b = 2**2; //возведение в степень(на старых версиях pow(2,2))
$c = 5;
// $d = -$c; ответ -5
// $d = +$c; сконвертирует '5' в int (5)(+ обозначает идентичность)
$i = ($i1 = 6) + 14;// пример работы присваивания
$s = "string";
$s = $s . "string2"; // . это конантенация(склеивание)
$s .= "string"; //пример со строками 
$aa = 6;
$ab = &$aa; //присвоение по ссылке по ссылке(даже если в будующем aa станет равным 7 то и ab тоже станет 7)
$c++; //сначало возврат значения а после прибовление 1
++$c; //наоборот
// '<br>' перенос строки
for ($i = 1; $i <=10 ; $i++){
    echo "нихао ёпта<br>";
}
/*
$i = 1
for (; $i <=10 ; $i++){
    echo "нихао ёпта<br>"; тоже самое что и выше но переменная дана зарание 
}
$i = 1;
for (; ;){
    echo "нихао ёпта<br>";
    $i++;
    if ($i ==10) break;
}
*/
$args = [1,2,3,4,5];
for ($i = 0; $i < count($args); $i++){
    echo $args[$i];
}
$i = 1;
while ($i <= 10){ //пока true цикл выполняется
    echo $i++;
}
//дальше тип создание таблицы с помощью while на 50 мин но мне как-то влом(слишком дахуя писать)

//слайдер с выбором даты рождения
/*
$year = 1993;
echo "<select>";
    while($year <= 2023) :
        echo "<option value=>" . $year . "</option>";
        $year++;
    endwhile;
*/
    $ii = 15;
    do{ //сначала выполняется действие после проверка на true
        echo $ii . "<br>";
        $ii++;
    } while($ii <= 10);

    $names = ["Alex","Ale","Alexs"]; 
    foreach($names as $name){ //раскладываем(as) значения в $name и выводит их по порядку до конца итерации
        echo $name . "<br>";
    }

    $container = [
        "презики" => '3',
        "пивко" => '1'
    ];
    foreach($container as $key => $item){ //вывод как ключа так и значения
        echo $key . " $item <br>";
    }