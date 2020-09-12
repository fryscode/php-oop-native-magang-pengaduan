<script type='text/javascript'>
    function HapusPetugas(){
        var x = window.document.delete.ptgs.value;
        var answer = confirm('Menghapus Data Master Petugas ID : '+x);

        if(answer){
            window.location='form_hapus.php?key='+x;
        }else{
            alert('Batal Hapus');
            window.location='lihat_petugas.php';
        }
    }
</script>

<body onload ='return HapusPetugas()';>
</body>

<?php
require_once "../class/ClassAkses.php";
require_once "../class/ClassMain.php";

$akses = new Akses;
$akses->CekSesi();
$akses->HakAkses();
$main = new Main;
$main->FormHapusPetugas();
?>
