<?php
require 'functions.php';

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() // mengembalikan array numerik
//mysqli_fetch_assoc() //mengembalikan array associative
//mysqli_fetch_array() //mengembalikan keduanya
//mysqli_fetch_object()

// while ( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs);
// }
$mahasiswa = query ("SELECT * FROM mahasiswa");

//tombol cari ditekan
if(isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br></br>

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplite="off">
<button type="submit" name="cari">Cari!</button>

</form>
<br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>TL</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
<?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick=" return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
        <td><?php echo $row["TL"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>


</table>

</body>
</html>