<?php
// $_GET
var_dump($_GET);

// Data mahasiswa
$mahasiswa = [
    [
        "nama" => "Fania",
        "TL" => "10112007",
        "email" => "faniariski315@gmail.com",
        "jurusan" => "Jurusan RPL"
    ],
    [
        "nama" => "Aldy",
        "TL" => "10062008",
        "email" => "Renaldy10@gmail.com",
        "jurusan" => "Jurusan TKR",
        "tugas" => ["90,80,100"]
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
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li>
                <a href="ke7.php?nama=<?php echo $mhs["nama"]; ?>&TL=<?php echo $mhs["TL"]; ?>&email=<?php echo $mhs["email"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>"><?php echo $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>