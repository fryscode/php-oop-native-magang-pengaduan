<?php
    require_once "../class/ClassMain.php";
    require_once "../class/ClassAkses.php";

    $akses = new Akses;
    $akses->CekSesi();
    $akses->HakAkses();
    $main = new Main;
    $main->FormEditPengaduan();

?>