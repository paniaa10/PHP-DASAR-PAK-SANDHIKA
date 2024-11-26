<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["TL"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: ke7.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

    <ul>
        <li><img src="img/1.jpg"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["TL"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>
    </ul>

    <a href="ke7.php">Kembali ke daftar mahasiswa</a>
    
</body>
</html>