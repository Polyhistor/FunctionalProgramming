<?php

// function as data
$double = function ($x) {
    $y = $x;
    return $y * 2;
};

$subtract_one = function ($x) {
    return $x - 1;
};

$add_three = function ($x) {
    return $x + 3;
};


$my_number = 5;
$result;

$operations_array = [
    "MathOperation" => $double, // 0
    "MathOperation" => $subtract_one, // 1
    "MathOperation" => $add_three
];

foreach ($operations_array as $key => $value) {
    if (strpos($key, "Math") !== false) {
        $result = $value(
            $my_number
        );
    };
}



echo $result;
