<?php
echo "<h1> Euromillones </h1> <p>5 números: ";
for($i = 0; $i < 5; $i++){
    echo rand(0, 50) . " ";
}
echo "</p><p>2 número de extrellas ";
for($i = 0; $i < 2; $i++){
    echo rand(0, 9) . " ";
}
echo "</p>";


?>
