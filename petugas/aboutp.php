<?php
 require_once "../class/ClassAkses.php";
 require_once "../class/ClassMain.php";

$akses = new Akses;
$akses->CekSesi();
$main = new Main;
$main->HalamanPetugas();
echo'<br><br>';
$main->TentangProgram();
echo '<br><br><br>';
$main->Footer();

?>