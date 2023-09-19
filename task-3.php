<?php

$firstNumber = 0;
$secondNumber = 1;

for ($num = 0; $num < 10; $num++) {
    if ($num <= 1) {
        $fibonacci = $num;
    } else {
        $fibonacci = $firstNumber + $secondNumber;
        $firstNumber = $secondNumber;
        $secondNumber = $fibonacci;
    }

    echo $fibonacci . " ";

    if ($fibonacci > 100) {
        break;
    }
}

echo "Submitted By Khayrul";