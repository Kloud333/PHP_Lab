<?php

//-------- Task 1.1 --------
echo gethostbyaddr('206.190.36.45') . '</br>';

//-------- Task 1.2 --------
echo checkdnsrr('dotcom.com') . '</br>';

//-------- Task 1.3 --------
//header('HTTP/1.1 301 Moved Permanently');
//header('Location: http://google.com');
//exit();

//-------- Task 2 --------
$href = 'https://www.epam.com/about';
$page = file_get_contents($href);
preg_match_all('/<svg /', $page, $match);

echo count($match[0]) . '</br>';

//-------- Task 3 --------
function sortPart($array, $index, $length = null) {
    if (!$length) $length = null;
    $partArray = array_slice($array, $index, $length);
    sort($partArray);
    array_splice($array, $index, count($partArray), $partArray);
    return $array;
}

print_r(sortPart([1, 5, 7, 4, 8, 9, 6, 5, 3, 4, 2], 3));
print_r(sortPart([1, 5, 7, 4, 8, 9, 6, 5, 3, 4, 2], 3, 5));

//-------- Task 4 --------
function maxRange($array, $ranges) {
    foreach ($ranges as $range) {
        $newArray[] = array_sum(array_slice($array, $range[0], ($range[1]) - $range[0] + 1));
    }
    arsort($newArray);
    return $ranges[key($newArray)];
}

print_r(maxRange([1, -2, 3, 4, -5, -4, 3, 2, 1], [[1, 3], [0, 4], [6, 8]]));
echo '</br>';

//-------- Task 5 --------
function countSmileys($array) {
    return count(preg_grep('/[:;][-~]?[\)D]/', $array));
}

echo countSmileys([':)', ';(', ';}', ':-D']) . '</br>';
echo countSmileys([';D', ':-(', ':-)', ';~)']) . '</br>';
echo countSmileys([';]', ':[', ';*', ':$', ';-D']) . '</br>';

//-------- Task 6 --------
function distance($someString) {
    foreach (array_unique(str_split($someString)) as $val) {
        preg_match('/' . $val . '.+' . $val . '/', $someString, $stringArray);
        $lengthArray[$val] = strlen(join('', $stringArray));
    }
    return array_search(max($lengthArray), $lengthArray) . max($lengthArray);
}

print_r(distance('raersrrrersassswwaaadfdfeeefgtthtgffdd'));
echo '</br>';
