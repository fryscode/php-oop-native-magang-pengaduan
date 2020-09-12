<script type='text/javascript'>
    function HapusWilayah(){
        var x = window.document.delete.wil.value;
        var answer = confirm('Menghapus Data Wilayah ID : '+x);

        if(answer){
            window.location='form_hapus_wil.php?key='+x;
        }else{
            alert('Batal Hapus');
            window.location='lihat_wilayah.php';
        }
    }
</script>

<body onload ='return HapusWilayah()';>
</body>

<?php
require_once "../class/ClassAkses.php";
require_once "../class/ClassMain.php";

$akses = new Akses;
$akses->CekSesi();
$akses->HakAkses();
$main = new Main;
$main->FormHapusWilayah();
?>