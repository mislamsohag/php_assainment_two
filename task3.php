
<?php
/*
Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.
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

$fiboNumber=12;
for($i=0; $i<=$fiboNumber; $i++){
    
    $fiboResult=fibonacci($i);
    if($fiboResult>100){
        break;
    }else{
        echo $fiboResult," ";
    }    
}