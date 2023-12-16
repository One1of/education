<?php
//Совмещение php с html
$a = 1;
if($a == 1) : ?>
    <h1>True</h1>
<?php else : ?>
    <h1>False</h1>
    <?php endif;

//сокращение if
$ife = (1 == 1) ? "True" : "False";
echo $ife;
//либо 
if (1 < 2)
    echo "True"; 
// echo "False"; будет восприниматься как else хоть и находится в if
else
    echo "False";

//если нужен только else
if (1 != 2){
echo "False";
}

//если в переменной есть какое-либо значение то оно его выводит а если нет то 2
echo ($a) ?: 2;
// || или, && и

switch($a){
    case 1:
        echo "1";
        break;
    case 2;    
        echo "2";
        break;
}

// === - тождественно равно(проверка ещё и по стилю)
$cheken = "egg";
$eggs = match($cheken){ //проверяет ещё и по тождеству
    "egg" => "яйцо",
    "noEgg" => "нет яйца"
};
echo $eggs; 

$int = 2;
$int1 = match(true){ //проверка на булево значение
    $int <= 1 => "<=1",
    $int <= 2 => "<=2"
};
echo $int1; 

$in = 5;
$in1 = 20;
$int2 = match(true){ //проверка на булево значение
    $in => "<=10",
    $in1 <= 20 => "<=20"
};
echo $int2; 