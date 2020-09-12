<?php
require_once "../class/ClassMain.php";
require_once "../class/ClassAkses.php";

$main = new Main;
$akses = new Akses;

$akses->CekSesi();
$main->HalamanPetugas();
$main->Chart();
echo '<br><br><br><br>';
$main->Footer();



?>
