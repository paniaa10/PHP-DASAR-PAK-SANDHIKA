<?php
//variable scope / lingkup variabel
$x = 10;

function tampilX() {
    $x = 20;
    echo $x;
}

tampilX();
echo $x;
?>