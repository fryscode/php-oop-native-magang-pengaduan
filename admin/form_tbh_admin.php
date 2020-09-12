<?php
require_once "../class/ClassMain.php";
require_once "../class/ClassAkses.php";
require_once "../class/ClassPetugas.php";

$main = new Main;
$akses = new Akses;
$akses->CekSesi();

$main->FormTambahAdmin();
echo '<br><br><br>';
$main->Footer();


?>
