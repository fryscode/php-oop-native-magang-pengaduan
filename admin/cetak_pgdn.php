<?php
  require_once "../class/ClassAkses.php";
  require_once "../class/ClassMain.php";

  $akses = new Akses;
  $akses->CekSesi();
  $akses->HakAkses();
  $main = new Main;
  $main->CetakPengaduan();

?>