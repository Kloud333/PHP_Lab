<?php

//-------- Bonus Task 1 --------

function nameGenerator($name) {
    if ($name[0] == $name[strlen($name) - 1]) {
        echo ucfirst($name . substr($name, 1)) . '</br>';
    } else {
        echo 'The ' . ucfirst($name) . '</br>';
    }

}

nameGenerator('dolphin');
nameGenerator('alaska');
nameGenerator('europe');


//-------- Bonus Task 2 --------

function stringConverter($str) {
    echo strtr($str, 'ATCG', 'TAGC') . '</br>';
}

stringConverter('GTAT');
stringConverter('ATTGC');

