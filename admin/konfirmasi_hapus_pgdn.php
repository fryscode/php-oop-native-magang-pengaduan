<script type='text/javascript'>
    function HapusPengaduan(){
        var x = window.document.delete.pgdn.value;
        var answer = confirm('Menghapus Data Pengaduan ID : '+x);

        if(answer){
            window.location='form_hapus_pgdn.php?key='+x;
        }else{
            alert('Batal Hapus');
            window.location='lihat_pengaduan.php';
        }
    }
</script>

<body onload ='return HapusPengaduan()';>
</body>

<?php
require_once "../class/ClassAkses.php";
require_once "../class/ClassMain.php";

$akses = new Akses;
$akses->CekSesi();
$akses->HakAkses();
$main = new Main;
$main->FormHapusPengaduan();
?>
