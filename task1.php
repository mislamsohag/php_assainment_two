
<?php

// Task 1: Looping with Increment using a Function

// for Loop;
 function isEven($start, $end, $step){

    for ($i = $start; $i <= $end; $i += $step) {

        if ($i % 2 == 0) {
            echo $i, ", ";
        }elseif ($i % 2 == 1) {
            // This number is Odd but i want to print Even number
            echo $i + 1, ", ";
        }
    }
}

// While Loop;
 /* function isEven($start, $end, $step){
    $i = $start;
    while ($i <= $end) {

        if ($i % 2 == 0) {
            echo $i, ", ";
        }elseif ($i % 2 == 1) {
            // This number is Odd but i want to print Even number
            echo $i + 1, ", ";
        }
        $i += $step;
    }
}  */

// Do While Loop;
/* function isEven($start, $end, $step){
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i, ", ";
        }
        elseif ($i % 2 == 1) {
            // This number is Odd but i want to print Even number
            echo $i + 1, ", ";
        }
        $i += $step;        
    }
    while ($i <= $end);    
} */

isEven(1, 20, 2);
