<?php
//$_GET
var_dump($_GET);
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
    "tugas" => ["90,80,100"],
    "gambar" => "2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
        <li><img src="img/<?php echo $mhs["gambar"]; ?>" </li>
            <li><?php echo $mhs["nama"]; ?></li>
            <li><?php echo $mhs["TL"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>