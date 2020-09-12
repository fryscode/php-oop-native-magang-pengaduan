<?php
require_once "../class/ClassAkses.php";
require_once "../class/ClassAdmin.php";

$akses = new Akses;
$akses->Ceksesi();
$admin = new Admin;
$admin->TambahPetugas();
?>
