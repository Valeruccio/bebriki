<?php
//
//$form ='<form method="GET">
//            <input type="number" name="id"  value='. time() .' ></input>
//            <p>Введите имя: <input type="text" name="name"/></p>
//            <p>Введите фамилию: <input type="text" name="lastname"/></p>
//             <input type="submit" value="Отправить">
//            </form>';
//
//    $name = $_GET["name"];
//    $last_name = $_GET["lastname"];
//    $id = $_GET["id"];
//    $fullname = $name . $last_name;
//
//echo $form;
//echo "Твое имя и фамилия, если бы ты был смешариком: $fullname";
//
//setcookie('fullname', $fullname);
////я потом сделаю отдельную html страницу куда можно будет встраивать пхп код
//
//
//ini_set("xdebug.overload_var_dump", "off");
//echo "<pre>";
//var_dump(
//    __FILE__,
//    __LINE__,
//    'Valeriy Tyulin',
//    'GET',
//    $_GET,
//    $_COOKIE
////    'GET',
////    $_GET
//);
//echo "</pre>";


//if (!isset($_POST["supername"])) {
//!!!
//    //POST можно менять через пыху
//    //GET менять нельзя, только через форму
//    $_POST["supername"] = '';
//}
//
//if (!isset($_POST["superlastname"])) {
//    $_POST["superlastname"] = '';
//}
//
//$form = '<form method="POST">
//            <p>Введите имя: <input type="text" name="supername" value="' . $_POST["supername"] . '"/></p>
//            <p>Введите фамилию: <input type="text" name="superlastname" value="' . $_POST["superlastname"] . '"/></p>
//             <input type="submit" value="Отправить">
//            </form>';
//
//echo $form;
//
//$name = $_POST["supername"];
//$last_name = $_POST["superlastname"];
//
//$fullname = $name . ' ' . $last_name;
//
//echo "Твое имя и фамилия, если бы ты был смешариком: $fullname";
//////я потом сделаю отдельную html страницу куда можно будет встраивать пхп код


//    $url = 'https://www.php.net/manual/ru/language.basic-syntax.php?id=12';
//
//    $result = parse_url($url);
//
//    $a = $result['scheme'];
//    $b = $result['host'];
//    $c = $result['path'];
//
//echo "Протокол: $a<br> Хост: $b<br> Путь: $c";

////7. Напишите сценарий PHP для перенаправления пользователя на другую страницу.
//$button = '<a href="pages/other_page.php"><button>Другая страница</button></a>';
//
//header('Location: http://bebriki/pages/other_page.php');

//
//echo $button;

//8. Напишите простой код PHP, чтобы проверить валидность email-адреса.
//$form = '<form method="POST">
//            <p>Введите email: <input type="text" name="email" value="' . $_POST["email"] . '"/></p>
//             <input type="submit" value="Отправить">
//            </form>';
//
//echo $form;
//
//$email = $_POST["email"];
//
//if (filter_var($email, FILTER_VALIDATE_EMAIL)){
//    echo "Твоя почта $email провалидирована";
//} else {
//    echo 'Пошел нахуй';
//}
//
//$url = 'https://www.php.net/manual/en/filter.filters.validate.php';
//if (filter_var($url, FILTER_VALIDATE_URL)){
//    echo "Твой урл $url провалидирован";
//} else {
//    echo 'Пошел нахуй еще раз';
//}

//9. Напишите сценарий PHP, чтобы отложить выполнение программы на заданное количество секунд.
//$dog = ['legs' => 4, 'eyes' => 2, 'fur' => true];
//
//    foreach ($dog as $key => $item) {
//            sleep(3);
//            echo time();
//            echo '<br>';
//            echo $key . ' '. $item;
//}
//


//10. Напишите программу PHP для обмена значениями между двумя переменными.
//со звездочкой - без новых переменных
$a = 10;
$b = 'строка';
