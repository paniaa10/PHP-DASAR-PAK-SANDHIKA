<?php
function salam($waktu = "Datang",$nama = "Admin")
{
  return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Belajar Function</title>
  </head>
  <body>
    
<h1><?= salam("Pagi"); ?></h1>
    
  </body>
</html>