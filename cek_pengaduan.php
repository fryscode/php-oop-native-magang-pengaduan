<?php
require_once "class/ClassPengaduan.php";
require_once "class/ClassMain.php";

$main = new Main;
$main->HalamanUtama();
echo '<br><br><br><br><br>';

$pengaduan = new Pengaduan;
$pengaduan->StatusProsesPengaduan();
echo'<br><br><br>';
$main->Footer();
?>