<?php
$mahasiswa = [
    ["Fania", "10112007","faniariski315@gmail.com","Jurusan RPL"],
    ["Renaldy Aulia", "10062008", "Jurusan TKR", "Renaldy10@gmail.com"],
    ["af", "19032019", "Jurusan RT", "officialaf@gmail.com",],
];
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
        cara dari array -->
        <li>Nama:<?php echo $mhs[0]; ?></li>
        <li>TL:<?php echo $mhs[1];?></li>
        <li>Email:<?php echo $mhs[2]; ?></li>
        <li>Jurusan:<?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>