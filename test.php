<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="clock.js"></script>

<form  method="POST">
       <h3>Введите имя</h3>
    <p><input name="name" type="text"></p>
    <p><input name="lastname" type="text"></p>
    <p><input name="submit" type="submit"></p>
</form>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['booba'] = NULL;

//Проверить пустой ли массив
if (empty($_POST)) {
}

//Проверить установлено ли было значение в массиве или объекте
if (isset($_POST['booba'])) {
}


//Проверка на отправку
if (!empty($_POST)) {

    //Проверка на введенное имя
    if ($_POST['name']) {
        $name = $_POST['name'];
    } else {
        echo "Введите имя!";
        die;
    }

    //Проверка на введенную фамилию
    if ($_POST['lastname']) {
        $lastname = $_POST['lastname'];
    } else {
        echo "Введите Фамилию!";
        die;
    }

    echo "<h3>Вас зовут: $name $lastname </h3>";
}

?>

</body>
</html>



