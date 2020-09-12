<?php
    require_once "class/ClassMain.php";

    $main = new Main;
    //$main->FormLogin();
    //$main->HalamanAdmin();
    $main->HalamanUtama();
    $main->Isi();
    echo'<br><br>';
    //$main->Chart();
    $main->Footer();
    //$main->chart();
    //$main->FormTambahAdmin();
?>