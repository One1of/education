<?php
// enctype="multipart/form-data" добавляется когда форма содержит тип файл
//print_r ($_POST)
print_r ($_FILES); // здесь хранятся данные переданные методом пост

if(!empty($_FILES)){ // если $_FILES не пуста то выполнятся условия(empty само по себе проверяет является ли переменная пустой)
    //проверяет, является ли файл загруженным на сервер. Если файл действительно загружен на сервер, он будет перемещён в указанное место
    // из временного в постояное
    move_uploaded_file ($_FILES['file']['tmp_name'],'engine/' .$_FILES['file']['name']);
    // 1 обращаемся к ключу(многомерному массиву) 2 ключ(находится в 1 ключе) содержащий временный файл 3 каталог(путь куда будет передан файл)
    // 4 задаём название файлу(из полученных данных и 2 ключа name )
}
if(file_exists('engine/for1.png')) echo "Файл существует"; //проверят сущ файла(принимает булево значение)

if(file_exists('engine/for1.png'))rename ('engine/for1.png','engine/test.png');
if(file_exists('engine/testtest.png')) rename('engine/testtest.png','test1.png');// поменяли название и перекинули в основную папку(engine/for1.png для системы является названием файла)

if(!file_exists('src')) mkdir('src', 0777, true);// создаёт каталоги(папку), 2 права на доступ 3 рекурсия(создание дочерных каталогов)
// может принимать 4 параметра

if(file_exists('src')) rmdir('src'); //удаляет

// if(copy('engine/test.png','test2.png')){echo "Файл скопирован"} копирует файл

// if(unlink('test2.png')){echo "Файл удалён"} удаляет файл

// is_dir / is_file проверка 1 каталог это или нет 2 файл  булево значение

// $text = file_get_contents('test.txt');  возвращает значения находящиеся в файле в виде строки
// echo nl2br($text); заменяет псевдосимвол /n на перенос
// $text = file_get_contents('test.txt', FALSE, NULL, 5, 10);
// 2 FALSE 3 NULL 4 позиция 5 кол-во символов

// $text = file('test.txt'); возвращает значения находящиеся в файле в виде массива
// $text = file('test.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); с помощью 1 константы убрал перенос строки 2 убрал пустые строки

// $file = 'test.txt' $var = 'Hello';
// $bytes = file_put_contents($file,$var, FILE_APPEND);(возвр байты)помещаю строку hello в файл  константа вместо перезаписи файла добавила новый
// LOCK_EX если я первый обратился к файлу то больше никто не может к нему обращаться до того момента пока я не перестану с ним работать
// echo $bytes вывожу кол-во байтов которое было загруженно

// echo filesize($file) узнаём кол-во байт в файле

// безопасная работа с файлами fopen fwrite fread fclose
// $handle = fopen($file, "r"); 2 открыл поток только на чтение(прочитай документацию)
// $text = fread($handele, filesize($handle)); 2 считываю всю длинну файла
// fwrite($handele, 'sglih'); вписываем чё-то в файл (чтобы работало вместо r нужно вписать w)
// fclose($handle);
?>

<form method="POST" action="" enctype="multipart/form-data">
<P><input type="text" name="title"></P>
<P><input type="file" name="file"></P>
<p><button>submit</button></P>
</form>
