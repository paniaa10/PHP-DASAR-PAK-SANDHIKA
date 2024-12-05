<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

//ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    //cek apakah data berhasil di ubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
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
    <title>Ubah data mahasiswa</title>
</head>
<body>

    <h1>Ubah data mahasiswa</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" nama="id" value="<?php echo $mhs["id"]; ?>">
        <input type="hidden" nama="gambarLama" value="<?php echo $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="TL">TL : </label>
                <input type="text" nama="TL" id="TL" required value="<?php echo $mhs["TL"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" nama="nama" id="nama" value="<?php echo $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" nama="email" id="email"value="<?php echo $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" nama="jurusan" id="jurusan"value="<?php echo $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?php echo $mhs['gambar']; ?> width="40"> <br>
                <input type="file" nama="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" nama="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>