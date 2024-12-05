<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root","", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

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
    <?php while( $row = mysqli_fetch_assoc($result)) : ?>

<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">ubah 1 hapus</a>
    </td>
    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
    <td><?= $row["TL"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>

</body>
</html>
