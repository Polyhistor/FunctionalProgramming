<?php


// function count_down($x)
// {
//     for ($i = $x; $i >= 0; --$i) {
//         echo "$i\n";
//     }
// }

function count_down($x)
{
    if ($x < 0) {
        echo "blast off";
        return;
    }
    echo $x . "...\n";
    count_down($x - 1);
}

count_down(10);
