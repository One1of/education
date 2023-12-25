<?php
// $_GET; глобальная переменная(может вызываться в любом php скрипте) хранящая данные в виде массива
// Он передает данные в URL-адресе запроса 
// http://localhost/php/engine/get_post.php?name=Alex где ? обозначает что сейчас будет перечень переменных которые я буду передавать
// для перечисления используется &. http://localhost/php/engine/get_post.php?name=Alex&name1=Elena

//когда глобальная переменная определена она вызывается global $var; , для GET POST и т.п это не нужно

// print_r ($_GET);

// form по умолчанию принимает метод get
?>
<!-- <form method="" action=""> 
<input type="text" name="name">
<input type="text" name="name1">
<input type="text" name="name2">
<button>Send</button>
</form> -->

<?php // print_r ($_POST); ?>
<!-- <form method="POST" action=""> 
<input type="text" name="name">
<input type="text" name="name1">
<input type="text" name="name2">
<button>Send</button>
</form> -->

<?php
// $name = strip_tags ($_POST['username'] ?? ''); //сокращ форма чтоб не писать if, ?? обознач если в name что-то есть то оно принимает это знач, 
// // а если нет то выводит пустоту
// $id = (int) (strip_tags ($_POST['id'] ?? ''));
// $password = strip_tags ($_POST['password'] ?? '');
// echo $name . "<br>";
// echo $id . "<br>";
// echo $password . "<br>";
// ?>
<!--  <form method="POST" action=""> <?php //тут указывается путь к html файлу?>
<input type="text" name="username">
<input type="text" name="id">
<input type="text" name="password">
<button>Send</button>
</form> -->

<?php echo $_SERVER['REQUEST_METHOD']; // выводит применяемый запрос

$success = false;
$contact_submit = $_POST ['contact_form'];
if ($contact_submit == 'submited'){
    //echo '<br> Данные были отправлены';
    $name = strip_tags (trim ($_POST['name']));
    $phone = strip_tags (trim ($_POST['phone']));
    $text = strip_tags (trim ($_POST['text']));
    $yes = strip_tags (trim ($_POST['yes'] ?? '')); // ?? если нету знач выводит пустоту
    $body = $name . "/n" . $phone . "/n" . $text . "/n" . $yes;

    if($name == "" ||$phone == "" || $text == "" || $yes == ""){
        $errors = "Заполните необходимые поля";
    } elseif (mb_strlen($name) > 20){
        $errors = "Имя не может быть больше 20";
    }
     else{
        mail('test@gmail.com','Message', $body); // обычно вместо mail используются библиотеки для отправки писем
        $success = true; //если mail будет отправлен о будет испольнено
    }
}
?> 

<style>
    label {
        width: 150px;
        display:block;
    }
</style>
<?php if($success){
    echo 'Сообщение отправленно вам на почту';
    } else {
    if ($errors) echo $errors;?>
<form method="POST" action="">
<p><label for="name">Name:</label><input type="text" id="name" value="<?php if(isset($name)) {echo $name;}?>" name="name"></p>
<p><label for="phone">Phone:</label><input type="number" id="phone" value="<?php if(isset($phone)) {echo $phone;}?>" name="phone"></p>
<p><label for="text">Text: </label><?php if(isset($name)) {echo $name;}?><textarea id="text" name="text"></textarea></p>
<p><label for="yes">Yes or Not</label><input type="checkbox" id="yes" value="<?php if(isset($yes)) {echo $yes;}?>" name="yes"></p>
<button name="contact_form" value="submited">Send contact</button>
</form>
<?php } ?>