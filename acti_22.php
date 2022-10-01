<?php
$divisor = 17;
$primo = true; 
for($i = 2; $i < $divisor; $i ++) {
        if ($divisor % $i == 0) {
           $primo = false;
           break;

        }
}
if($primo){
    echo 'El número '. $divisor . ' es primo.';
}else{
    echo 'El número '. $divisor . ' NO es primo.';
}
?>