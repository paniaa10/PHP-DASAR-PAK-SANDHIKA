<?php
//membuat array
//cara lama
$hari = array("Senin","Selasa","Rabu");
//cara baru
$bulan = ["Januari","Februari","Maret"];
$arrl = [123, "tulisan", false];

//menampilkan array
//var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//menampilkan 1 elemen pada array
echo $arrl[0];
echo "<br>";
echo $bulan[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>