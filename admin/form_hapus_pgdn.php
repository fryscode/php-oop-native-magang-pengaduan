<?php
require_once "../class/ClassAkses.php";
require_once "../class/ClassAdmin.php";

$akses = new Akses;
$akses->CekSesi();
$akses->HakAkses();
$admin = new Admin;
$admin->HapusPengaduan();

?>
