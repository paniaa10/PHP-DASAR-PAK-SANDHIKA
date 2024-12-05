<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result ) ) {
    $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
    global $conn;
    $TL = htmlspecialchars($data["TL"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //upload gambar
    $gambar = upload();
    if(!$gambar ) {
    return false;
    }
    //query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$TL', '$email', '$jurusan', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['nama'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpNama = $_FILES['gambar']['tmp_nama'];

    //cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
        alert('pilih gambar terlebih dahulu!);
              </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg']['jpeg']['png'];
    $esktensiGambar = explode('.')($namaFile);
    $esktensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar!);
              </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if($ukuranFile > 1000000 ) {
        echo "<script>
        alert('ukuran gambar terlalu besar!);
              </script>";
        return false;
    }

    //lolos pengecekan, gambar siap diupload
    //generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= '$ekstensiGambar';

    move_uploaded_file($tmpNama, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $TL = htmlspecialchars($data["TL"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error === 4']) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
}

function cari($keyword) {
    $query ="SELECT * FROM mahasiswa
                WHERE
            nama LIKE '%$keyword%' OR
            TL LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
            return query($query);
}
?>