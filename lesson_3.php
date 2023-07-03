<?php
//10. Напишите программу PHP для обмена значениями между двумя переменными.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Задача: Создайте массив, заполненный числами от 1 до 100.
//ОТВЕТ

//Задача: Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл.
//ОТВЕТ

//Задача: Найдите сумму чисел от 1 до 100 не используя цикл.
//ОТВЕТ

$array = [];
$array2 = [];

for ($iterator = 1; $iterator <= 100; $iterator++) {
    //Перввый способ заполнения массива через открытые скобки
    $array[] = $iterator;
    //Набиваем массив с помощью функции array_push
    array_push($array2, (string)(mt_rand(1, 100) + $iterator) . ' random');
}

//Соединяет значения нескольких массивов в один, но надо указать переменную в которую он его запишет
$headarray = array_merge($array, $array2);

//Массив перебираем
foreach ($headarray as $key => $value) {
    //Проверка на вхождение
    if (strstr($value, '6')) {
//        echo $key . ' => ' . $value;
//        echo "</br>";
  }
}

//Задача: Создайте массив, заполненный буквами от 'a' до 'z'.
//ОТВЕТ
$abcarray = range('a', 'z', 3);
//Перемешать значения
shuffle($abcarray);
//Упорядочить значения
natsort($abcarray);

//Задача: Дан массив $arr [1, 2, 3, 4]. Подсчитайте количество элементов этого массива.
//ОТВЕТ
//Подсчет элементов массива
$countabc = count($abcarray);
//Упорядочить ключи
$abcarray = array_values($abcarray);

for ($i = 0; $i < $countabc; $i++) {
    echo "$abcarray[$i]";
            echo "</br>";
}
