<?php

/**
 * Функция для того, чтобы складывать два числа
 *
 * @param $a
 * @param $b
 * @return mixed
 */
function sum($a = 0, $b = 0) {
    return $a + $b;
}

/**
 * Функция для того, чтобы складывать содержимое массивов
 *
 * @param $a
 * @param $b
 * @return mixed
 */
function sum_array($array = []) {
    //Назначили пустую переменную с конечным результатом
    $allsum = 0;

    //Перебираем массив
    foreach ($array as $item) {

        //Проверяем на то, способно ли приведенное значение массива собственно складываться
        if (is_int((int)$item)) {
            $allsum += (int)$item;
        }
    }
    return $allsum;
}

/**
 * Функция перенаправления на ссылку
 *
 * @param $url
 */
function redirect($url) {
    header("Location:" . $url);
    exit();
}