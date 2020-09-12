<?php
    require_once "../class/ClassMain.php";
    require_once "../class/ClassAkses.php";

    $akses = new Akses;
    $akses->CekSesi();
    $akses->HakAkses();

    $main = new Main;
    $main->HalamanAdmin();
    echo '<br><br><br>';
    $main->FormTambahWilayah();
    echo '<br><br><br><br>';
    $main->Footer();

?>