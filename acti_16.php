<?php
// PHP code to get the Fibonacci series
function Fibonacci($n){
  
    $num1 = 0;
    $num2 = 1;
  

    for ($i =0;$i < $n; $i++){
        echo ' '.$num1 . '<br>';
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }
}
  
// Driver Code
$n = 20;
Fibonacci($n);
?>