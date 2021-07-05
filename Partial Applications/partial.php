<?php

$add = fn ($x, $y, $z) => $x + $y + $z;
$add_partial = fn ($x) => fn ($y, $z) => $add($x, $y, $z);

$add_5 = $add_partial(5);
$sum = $add_5(6, 7);

$add_partial = fn ($x) => fn ($y) => fn ($z) => $add($x, $y, $z);
$add_partial(5)(6)(3);

echo $sum . "\n";
