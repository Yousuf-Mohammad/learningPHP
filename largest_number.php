<?php 
    
    $num1=4;
    $num2=5;
    $num3=6;

    if($num1>$num2 && $num1>$num3){
        printf("The largest number is %d", $num1);
    }
    elseif($num2>$num1 && $num2>$num3){
        printf("The largest number is %d", $num2);
    }
    else{
        printf("The largest number is %d", $num3);
    }
?>