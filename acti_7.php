<?php
echo "<h1> Euromillones </h1> <p> Par o impar <br>";


for($i = 0; $i < 10; $i++){
    $variable = rand(0, 50) . " ";
    if($variable % 2 == 0){
        echo "El número " . $variable ."es par.<br>";
    }else{
        echo "El número " . $variable ."es impar. <br>";
    }
}
?>
