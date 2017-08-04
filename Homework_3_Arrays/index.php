<?php

//-------- Task 1 --------

function repeatArray($array) {
    $newArray = '';
    foreach ($array as $arrayElement) {
        $newArray .= str_repeat((string)$arrayElement, $arrayElement);
    }
    return str_split($newArray);
}

print_r(repeatArray(array(1, 3, 2, 4)));
echo '</br>';

//-------- Task 2 --------

$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
sort($temperatures);

$minTemps = array_slice(array_unique($temperatures), 0, 3);
$maxTemps = array_slice(array_unique($temperatures), -3, 3);

function averageTemps($tempArray) {
    $firstMatches = array_filter($tempArray, function ($el) use ($tempArray) {
        return $el >= round(array_sum($tempArray) / count($tempArray));
    });
    return $averageArray = array_slice($tempArray, array_search(array_shift($firstMatches), $tempArray) - 1, 3);
}

print_r($minTemps);
echo '</br>';
print_r($maxTemps);
echo '</br>';
print_r(averageTemps($temperatures));
echo '</br>';

//-------- Task 3 --------

$books = [
    [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
    ],
    [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
    ],
    [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
    ],
    [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
    ],
    [
        'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jquery']
    ],
    [
        'name' => 'Miss Peregrine\'s Home for Peculiar Children',
        'author' => 'Ransom Riggs',
        'price' => 8.18
    ]
];

function sortBooks($books) {
    foreach ($books as $el) {
        $price[] = $el["price"];
    }
    return array_multisort($price, $books);
}

function filterBooks($books) {
    return array_filter($books, function ($book) {
        return is_array($book['tags']) && in_array('php', $book['tags']);
    });
}

sortBooks($books);
print_r($books);
echo '</br>';

print_r(filterBooks($books));
echo '</br>';


//-------- Task 4 --------


function equalPartsOfArray($mass) {
    for ($i = 0; $i < count($mass); $i++) {
        if (array_sum(array_slice($mass, $i + 1, count($mass))) == array_sum(array_slice($mass, 0, $i))) {
            return $i;
        }
    }
    return -1;
}

echo equalPartsOfArray([1, 2, 3, 4, 3, 2, 1]) . '</br>';
echo equalPartsOfArray([1, 100, 50, -51, 1, 1]) . '</br>';
echo equalPartsOfArray([20, 10, -80, 10, 10, 15, 35]) . '</br>';
echo equalPartsOfArray([10, -80, 10, 10, 15, 35, 20]) . '</br>';


echo '</br>';

//-------- Task 5 --------

$array1 = [1, 1, 1, 2, 1, 1];
$array2 = [0, 0, 0.55, 0, 0];
$array3 = [3, 1, 5, 3, 7, 4, 1, 5, 7];

function massUnique($array) {
    return array_search(1, array_count_values(explode(' ', implode(' ', $array))));
}

echo massUnique($array1) . '</br>';
echo massUnique($array2) . '</br>';
echo massUnique($array3) . '</br>';