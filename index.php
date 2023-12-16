<?php
$name = "Lena"; $name2 = "Лена";

var_dump($name); //функция var_dump как и print с echo выводит значение но дополнительно показывает тип данных и кол-во символов а так же место расположения
var_dump($name2);// выводит вместо 4 знаков 8 так как в керилице 1 символ равен 2 
//строковое значение находится в пределах ковычек
//значение "10" будет иметь тип строки так как находится в "" 
$int1 = "15"; $int2 = 15;
echo $int1 + $int2; //php понимает что нужно тип данных str перевести в тип данных int и мы получаем 30
echo $name . " " . $name2;//отделили строки друг от друга
$int3 = 20;
$float = 53.45;//float и double являются одинаковыми типами
//settype($float, "int");//settype устанавливает определённый тип данных int(и возвращает его)
//echo gettype($float) он показывает только тип переменной
echo $int3 + (int)$float; //преобразовали в тип int
$int4 = 5;
$str = "$int4";//тип данных int превратили в str
var_dump($str);

//bool
echo is_int($int2); //проверяет является ли int2 переменной типа int и выводит в зависимости от результата 1(true) либо 0(false)
echo isset($float); //если переменная существует то она возвращает true

//масивы (https://www.php.net/manual/ru/ref.array.php  - все существующие функции для массивов)
$arrays = ['Vera', 10, 62.4, true];// более современный массив
$arrays1 = array();// в старых версиях
$arrays2 = ["name" => "Ilya",
            "age" => 17];// задали наименование кодировок вместо 0,1 и их значение(ассоциативный массив - ключ + значение)
$arrays4 = ["age" => 18, //многомерный массив
            "array" => $arrays]; //запихнули в переменную массив
echo count ($arrays2);// возвращает кол-во элементов (sizeof тоже самое)
echo $arrays[1];//echo не может вывести весь массив по этому мы указывем яйчейки с данными 
echo $arrays2["name"]; //вывод знач из ассоциативного массива
$arrays0 = [1,6,0,4];
array_push($arrays0, 5); //закинули значение в конец массива
// array_unshift();  в начало массива
asort($arrays0); //сортировка по возрастанию и алфавиту
//arsort(); противоположность asort
print_r($arrays0); //выводит данные касающиеся массива
$arrays01 = array_merge($arrays,$arrays2); //совмещение двух массивов в один общий
$username = "Lexa", "Anna";
$array = explode(", ", $username);// конвертирует переменную username в массив(1 ограничитель, 2 переменная)
$username = implode(" ", $username);//обратно в строку и мы убрали пробелы

//resource
// $file = fopen(ссылка(путь) до файла, 'r' mod read для чтения);