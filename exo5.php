<?php
$age = 20;
switch($age){
    case $age >= 18:
        echo "je suis majeur";
        break;
    case $age <= 18 & $age > 0:
        echo "je suis mineur";
        break;
    case $age < 0:
        echo "erreur age impossible";
    
}
?>


