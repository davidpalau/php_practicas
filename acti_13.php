<?php
$i = 0;
while($i <= 6){
    echo '<p>';
    $j = 0;
    while($j < $i){
        echo '*';
        $j++;
    }
    $i++;
    echo '</p>';
}
?>