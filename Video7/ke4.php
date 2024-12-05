<?php
$mahasiswa = [
    ["Fania Rizky", "10112007", "RPL", "faniariski315@gmail.com"],
    ["Renaldy Aulia", "10062008", "TKR", "Renaldy10@gmail.com"],
    ["af", "19032019", "RT", "officialaf@gmail.com",],
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
</body>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <!-- 1 -->
    <!-- <li>Fania Rizky</li>
    <li>10112007</li>
    <li>Jurusan RPL</li>
    <li>faniariski315@gmail.com</li> -->
    <!-- 2 -->
    <?php //foreach( $mahasiswa as $mhs ) : ?>
        <li><?php //echo $mhs; ?></li>
        <?php //endforeach ?> 

        <li>Nama :<?php echo $mhs[0]; ?></li>
        <li>TL :<?php echo $mhs[1]; ?></li>
        <li>Jurusan :<?php echo $mhs[2]; ?></li>
        <li>Email :<?php echo $mhs[3]; ?></li>
</ul>
<?php endforeach ?>

</html>