<?php
$age = 20;


    if($age >=18){
    echo "je suis majeur";
    return;
}elseif( $age >= 0 & $age <= 17){
    echo "je suis mineur";
    
}elseif($age < 0){
    echo "Y a un probleme";
    }



?>