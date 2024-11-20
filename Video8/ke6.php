<?php
//jika mahasiswanya banyak
$mahasiswa = [
    [
    "nama" => "Fania",
    "TL" => "10112007",
    "email" => "faniariski315@gmail.com",
    "jurusan" => "Jurusan RPL"
    ],
    "nama" => "Aldy",
    "TL" => "10062008",
    "email" => "Renaldy10@gmail.com",
    "jurusan" => "Jurusan TKR",
    "tugas" => ["90,80,100"]
];
//cara melihat
// echo $mahasiswa [1],["email"]; (tidak ada array tugas)

//cara 2
echo $mahasiswa[1]["tugas"][1];
?>