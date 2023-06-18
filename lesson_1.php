<?php
//Думаю первая тема будет про то, что такое пыха,
// с чем ее едят, что такое сервер, клиент и чем отличается http от https,
// так же разберём вообще глобальную переменную $SERVER

//ПЕРЕМЕННЫЕ
$baks = 300; //int
$baksstring = '300'; //string
$baksfloat = 300.0;  //float
$is_get_baks = true; //bool да
$no_baks = false; //bool нет
$nulltype = null;
$array = []; //массив

//Cпособы конкатенации
$stringtoecho = 'Я '. $baks. ' использую одинарную кавычку \' в коде 2232'; // С точками
$stringtoecho2 = "$stringtoecho"; // С использованием переменных
$stringtoecho2 .= ' '; // С использованием оператора присвоения

//Освоить навыки общения
//Создайте HTML форму на своей странице, которая принимает имя пользователя и отображает его с помощью оператора PHP echo.
$html = '<div>
            <form action="" method="get">
                <label for="GET-name">ИМЯ:</label>
                <input id="GET-name" type="text" name="name">
                <input type="submit" value="Save">
            </form>
        </div>';

echo $html;
echo $_GET['name'];



ini_set("xdebug.overload_var_dump", "off");
echo "<pre>";
            var_dump(
                __FILE__,
                __LINE__,
                'Valeriy Tyulin',
'coniec'
            );
            echo "</pre>";
            die;

//МАССИВЫ
//НА подумать, разобрать и преиспониться
$dog = ['legs' => 4, 'eyes' => 2, 'fur' => true];
$doge = ['legs' => 3, 'eyes' => 1, 'fur' => false];

$dogs = [$dog, $doge];

foreach ($dogs as $onedog) {
    foreach ($onedog as $key => $item) {
        if ($key == 'eyes'){
            print_r('у собаки ' . $item . ' глаз');
            echo '<br>';
        }
    }
}

//Пример массива
$array = ['Hello', ',', 2.3, 'World', ['bebe', 'lupa', 'pupa'], '.', false, 'Im your first program!'];
$resultstring = '';
//Метод перебора массива
foreach ($array as $key => $item) {
    if (is_string($item)) {
        $resultstring .= $item;

        if ($item == ',' || $item == '.') {
            $resultstring .= ' ';
        }
    }
}

echo $resultstring;


//Пример применения булевых типов
if ($is_get_baks) {
//    echo '<h1>Привет мир</h1>';
}


//
//$a = 5;
//$b = '05';
//var_dump($a == $b);         // Почему true?
//var_dump((int)'012345');     // Почему 12345?
//var_dump((float)123.0 === (int)123.0); // Почему false?
//var_dump((int)0 === (int)'hello, world'); // Почему true?

//"Я использую одинарную кавычку ' в коде"
//"Это плохая команда: del c:\*.*"