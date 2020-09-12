<?php
    require_once "../class/ClassAkses.php";
    require_once "../class/ClassPetugas.php";

    $akses = new Akses;
    $akses->CekSesi();
    $petugas = new Petugas;
    $petugas->LihatPengaduanPetugas();

?>
