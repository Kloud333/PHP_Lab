<?php

//-------- 1 Task --------
$text1='Hello';
$text2='World';

echo $text1.$text2;


//-------- 2 Task --------
$var = 'hello';
echo $var[0]." ".$var[1]." ".$var[4];


//-------- 3 Task --------
$mass = array(-5, 0, -3, 2);

for ($i=0; $i<count($mass); $i++) {
    $a = $mass[$i];

    if ($a>0 && $a<5) {
         echo 'Вірно ';
    } else {
        echo 'Невірно ';
    }
}


//-------- 4 Task --------
for ($i=0; $i<60; $i++) {
    $min = $i;

    if ($min>=0 && $min<15) {
        echo 'Перша';
    } elseif ($min>=15 && $min<30) {
        echo 'Друга';
    } elseif ($min>=30 && $min<45) {
        echo 'Третя';
    } elseif ($min>=45 && $min<59) {
        echo 'Четверта';
    }
}


//-------- 5 Task --------
for ($i=2000; $i<3000; $i++) {
    $year = $i;

    if (($year % 4 == 0) && ($year/100 != 0) || ($year % 400) == 0) {
        echo $year.' - Рік високосний';
        echo '</br>';
    } else {
        echo $year.' -  Рік не високосний';
        echo '</br>';
    }
}


//-------- 6 Task --------
$str = '385934';

$subStr1 = substr($str, 0, strlen($str)/2);
$subStr2 = substr($str, strlen($str)/2, strlen($str));

$subStr1Count = 0;
$subStr2Count = 0;

for ($i = 0; $i<$subStr1; $i++) {
    $subStr1Count += $subStr1[$i];
    $subStr2Count += $subStr2[$i];
}

if ($subStr1Count==$subStr2Count) {
    echo 'Так';
} else {
    echo 'Ні';
}


?>