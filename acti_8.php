<?php
echo "<h1> Par o impar </h1> <p>  <br>";


for($i = 0; $i < 10; $i++){
    $variable1 = rand(0, 15) . " ";
    $variable2 = rand(0, 15) . " ";
    if(($variable1 + $variable2) < ($variable1 * $variable2)){
        echo " Variable  " . $variable1 . " variable " . $variable2 .", el producto es mayor que la suma.<br>";
    }else{
        echo " Variable 1 " . $variable1 . " variable " . $variable2 ." la suma es mayor que el producto.<br>";
    }
}
?>

