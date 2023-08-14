<?php
//*С помощью рекурсии организовать функцию возведения числа в степень.
// Формат: function power($val, $pow), где $val – заданное число,
// $pow – степень. Учитывайте степень 0 и отрицательную степень.


$total = up_to_degree(4, 4);
echo "<br>";
echo $total;

/**
 * @param $int
 * @param $degree
 * @return float|int
 */
function up_to_degree($int, $degree) {

    //Если степень 0
    if ($degree == 0) {
        echo "<br>";
        echo "Конец цикла";
        return 1;
    }

    if ($degree < 0) {
        return up_to_degree(1/$int, -$degree);
    }

    echo "<br>";
    echo "Цикл" . $degree;
    return $int * up_to_degree($int, $degree - 1);
}

///////////////////////////////////////////////////////////
$data = [
    [ 'id_spacecom' => 18, 'num_block' => 15 ],
    [ 'id_spacecom' => 12, 'num_block' => 9  ],
    [ 'id_spacecom' => 19, 'num_block' => 16 ],
];

$order = [15,16,9];

//меняем местами элементы и ключи массива $order:
$sort = array_flip($order);

//и используем его при сортировке с помощью usort
usort($data, function($a,$b) use($sort) {
    return $sort[$a['num_block']] - $sort[$b['num_block']];
});
///////////////////////////////////////////////////////////
///

