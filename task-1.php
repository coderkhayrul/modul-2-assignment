<?php

// For Loop
function forEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

forEvenNumbers(2, 20, 2);

echo "<br>";

// While Loop
function whileLoopEvenNumbers($start, $end, $step) {
    while ($start <= $end) {
        if ($start % 2 === 0) {
            echo $start . " ";
        }
        $start += $step;
    }
}

whileLoopEvenNumbers(2, 20, 2);

echo "<br>";

// Do While Loop
function doWhileEvenNumbers($start, $end, $step) {
    do {
        if ($start % 2 === 0) {
            echo $start . " ";
        }
        $start += $step;
    } while ($start <= $end);
}

doWhileEvenNumbers(2, 20, 2);

echo "Submitted By Khayrul";