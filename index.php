<?php
function writeMsg() {
    echo "Здарова всем!";
}

writeMsg();   // Вызов функции


echo '<hr>';

$cars = array("BMW", "MUSTANG", "MERCEDES-BENZ", "BUGATTI");

echo "I Like " . $cars[0]. ", " . $cars[1]. ", " . $cars[2]. " and " . $cars[3] . ".";
?>
