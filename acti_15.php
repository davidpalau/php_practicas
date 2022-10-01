<?php
$divisor = 17;
$primo = true; 
$i = 2;
while($i< $divisor){
        if ($divisor % $i == 0){
           $primo = false;
           break;

        }
        $i++;
}
if($primo){
    echo 'El número '. $divisor . ' es primo.';
}else{
    echo 'El número '. $divisor . ' NO es primo.';
}
?>