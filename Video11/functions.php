<?php
//fungsi untuk koneksi ke database
function koneksi() {
    return mysqli_connect("localhost", "root", "root", "phpdasar");
}

//fungsi untuk melakukan query ke database
function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    
//menampung data dalam array
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
