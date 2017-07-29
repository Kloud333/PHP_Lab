<?php

//-------- Task 1 --------

$text = 'var_test_text';

echo lcfirst(str_replace('_', '', ucwords($text, '_'))) . '</br>';

//-------- Task 2 --------

$str = 'ФЫВА олдж';

$array = explode(' ', $str);

function strReverse($array) {
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = implode(array_reverse(preg_split('//u', $array[$i])));
    }
    return implode(' ', $array);
}

echo strReverse($array) . '</br>';

//-------- Task 3 --------

$a = [342, 55, 33, 123, 66, 63, 9];

foreach ($a as $el) {
    if (preg_match('/3/', $el)) {
        echo $el . ' ';
    }
}
echo '</br>';


//-------- Task 4 --------

$b = [342, 55, 33, 123, 66, 63, 9];

$str2 = join($b);

echo substr_count($str2, '3');


