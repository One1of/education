<?php
// динамика - когда мы подключаем отдельный файл

//include 
//include 'front/header.php';
// если путь будет указан не верно то выбьет ошибку но будет продолжать работу 

//require 
//require 'front/header.php';
// если путь будет указан не верно то выдаёт фатальную ошибку после которой работа останавливается

//include_once
// позволяет олин раз подключить файл но перед этим проверяет не был ли он подключен до этого 

//require_once
// так же работает как и include_once только фатальная ошибка

//подключение к header.php файл index.php
//require_once '../index.php' если нужно вернуться на одну позицию из дочернего в родительский каталог
// подключаю файл к файлу находящемуся не в главной папке а во вложенной

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson1</title>
</head>
<body>
    <?php
require_once 'front/header.php'; 
require_once 'front/footer.php'; // подключил которую библиотеку следует подключать в начале кода

sum(7,8); // вызов функции
sum(1,9);

$a = 20;
$b = 30;
sum1($a,$b); //выдаёт глобальные a и b

echo sum2(7,5);

if(!function_exists ('sum')){ //если функция не существует то возвращает true
    function sum($a,$b){ // такое постоянно применяется при создании сайтов так как мы не знаем существуют такие функции или нет
        echo $a + $b;
        echo "<br>";
    }
}
?>
</body>
</html>
