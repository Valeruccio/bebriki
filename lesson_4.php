<?php
require_once('lib.php');

$a = 1;
$b = 3;
$i = sum($a, $b);
$u = sum($i, $b);
$y = '100';
$h = 'sdf';

$rarray = [$i, $u, $b, $a, $y, $h];
$result = sum_array($rarray);
$result2 = sum_array([1,2,3,5,7,8,9,123,345,64576,4567678,567, 'sdddfsdf', '234234', 34534]);
$result3 = sum_array();

//Сделай форму, где нужно вводить два числа
//Четыре кнопки для умножения, сложения, вычитания, деление

echo '<form action="test.php" method="post">
<input type="submit" name="action"/>
</form>';
