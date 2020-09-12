<?php
require_once "../class/ClassMain.php";
require_once "../class/ClassAkses.php";

$akses = new Akses;
$akses->CekSesi();
$main = new Main;
$main->CetakValidasi();




?>