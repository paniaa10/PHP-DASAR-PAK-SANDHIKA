<?php
//cara menambahkan gambar
//jika mahasiswanya banyak
$mahasiswa = [
    [
    "nama" => "Fania",
    "TL" => "10112007",
    "email" => "faniariski315@gmail.com",
    "jurusan" => "RPL",
    "gambar" => "1.jpg"
    ],
    [
    "nama" => "Aldy",
    "TL" => "10062008",
    "email" => "Renaldy10@gmail.com",
    "jurusan" => "TKR",
    "gambar" => "2.jpg"
    ]
];
//kerennya jika kita mengetiknya ketukar tidak masalah, asal key-nya benar
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
        <!-- cara manual
        <li>Fania</li>
        <li>10112007</li>
        <li>faniariski315@gmail.com</li>
        <li>Jurusan RPL</li> 

        cara manual menambahkan gambar
        <li>
            <img src="img/1.jpg">
        </li>
        
        cara dari array-->
        <li>
            <img src="img/<?php echo $mhs["gambar"]; ?>">
        </li>
        <!-- cara dari array -->
        <li>Nama:<?php echo $mhs["nama"]; ?></li>
        <li>TL:<?php echo $mhs["TL"];?></li>
        <li>Email:<?php echo $mhs["email"]; ?></li>
        <li>Jurusan:<?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>