<?php
require_once "../class/ClassAkses.php";
require_once "../class/ClassMain.php";

//echo $
$akses = new Akses;
$akses->CekSesi();
$akses->HakAkses();
$admin = new Main;
$admin->HalamanAdmin();
$admin->Chart();
echo '<br><br><br><br>';
$admin->Footer();

?>
