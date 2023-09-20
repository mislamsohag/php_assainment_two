
<?php
/*
Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function.
*/

function fibonacci($number){
    
    if($number==0){
        return 0;
    }elseif($number==1){
        return 1;
    }else{
        return (fibonacci($number-1)+fibonacci($number-2));
    }
}

$fiboNumber=15;

for($i=1; $i<=$fiboNumber; $i++){
    
    $fiboResult=fibonacci($i);    
    echo $fiboResult," ";    
    
}