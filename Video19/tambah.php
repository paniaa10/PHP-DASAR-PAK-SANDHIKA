<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

//koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    //ambil data dari tiap elemen dalam form
    $TL = $_POST["TL"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    //cek apakah data berhasil di tambahkan atau tidak
    if( mysqli_query($conn, $query) ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>

    <h1>Tambah data mahasiswa</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="TL">TL : </label>
                <input type="text" name="TL" id="TL" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            <li>
        </ul>
    </form>
</body>
</html>