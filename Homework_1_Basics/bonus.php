<?php
function compare($s1, $s2)
{
    $s1 = sumNumbers(strtoupper($s1));
    $s2 = sumNumbers(strtoupper($s2));
        return $s1==$s2;
}

function sumNumbers($str)
{
    $count=0;
    if (ctype_alpha($str)) {
        for ($i=0; $i<strlen($str); $i++) {
            $count += ord($str[$i]);
        }
        return $count;
    }
    return $count;
}

echo compare("AD","BC");

?>