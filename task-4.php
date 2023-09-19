<?php 

function printFibonacciNumber($numTerms) {
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $numTerms; $i++) {
        if ($i <= 1) {
            $fibonacci = $i;
        } else {
            $fibonacci = $first + $second;
            $first = $second;
            $second = $fibonacci;
        }

        echo $fibonacci . " , ";
    }
}

printFibonacciNumber(15);


echo "Submitted By Khayrul";