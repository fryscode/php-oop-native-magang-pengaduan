<?php

require_once "ClassAkses.php";
require_once "ClassBiodata.php";

class Pengaduan{
    var $IdP,/*$Nik*/$JenisKasus,$NamaP,$Jk,$Umur,
    $Pendidikan,$Job,$AlamatP,$Hubungan,$Tgl,
    $Validasi,$Status,$Rtp,$Rwp,$KelP,$Pihak,$Cari;

    function SetIdp(){
        if(isset($_POST['idp'])){
            $Idp = $_POST['idp'];
        }
        else if(isset($_GET['key'])){
            $Idp = $_GET['key'];
        }
        else{
            $Idp = '';
        }
        $this->Idp = $Idp;
    }
    function SetPihak(){
        if(isset($_POST['pihak'])){
            $Pihak = htmlentities(htmlspecialchars($_POST['pihak']));
            
        }
        $this->Pihak = $Pihak;
    }
    function SetJenisKasus(){
        if(isset($_POST['jnk'])){
            $JenisKasus = $_POST['jnk'];
        }
        $this->JenisKasus = $JenisKasus;
    }
    function SetAlamatP(){
        if(isset($_POST['almtp'])){
            $AlamatP = htmlentities(htmlspecialchars($_POST['almtp']));
        }
        $this->AlamatP = $AlamatP;
    }

    function SetKelP(){
        if(isset($_POST['kelp'])){
            $KelP = htmlentities(htmlspecialchars($_POST['kelp']));
        }
        $this->KelP = $KelP;
    }

    function SetRtp(){
        if(isset($_POST['rtp'])){
            $Rtp = htmlentities(htmlspecialchars($_POST['rtp']));
        }
        $this->Rtp = $Rtp;
}

function SetRwp(){
    if(isset($_POST['rwp'])){
        $Rwp = htmlentities(htmlspecialchars($_POST['rwp']));
    }
    $this->Rwp = $Rwp;
}

    function SetNamaP(){
        if(isset($_POST['nmp'])){
            $NamaP = $_POST['nmp'];
        }
        $this->NamaP = $NamaP;
    }
    function SetJk(){
        if(isset($_POST['jk'])){
            $Jk = $_POST['jk'];
        }
        $this->Jk = $Jk;
    }
    function SetUmur(){
        if(isset($_POST['umur'])){
            $Umur = $_POST['umur'];
        }
        $this->Umur = $Umur;
    }
    function SetPendidikan(){
        if(isset($_POST['pddk'])){
            $Pendidikan = $_POST['pddk'];
        }
        $this->Pendidikan = $Pendidikan;
    }
    
    function SetJob(){
        if(isset($_POST['job'])){
            $Job = $_POST['job'];
        }
        $this->Job = $Job;
    }
    
    function SetHubungan(){
        if(isset($_POST['hbgn'])){
            $Hubungan = $_POST['hbgn'];
        }
        $this->Hubungan = $Hubungan;
    }
    
    function SetTgl(){
        if(isset($_POST['tgl'])){
            $Tgl = $_POST['tgl'];
        }
        $this->Tgl = $Tgl;
    }
   
    
    function SetValidasi(){
        if(isset($_POST['validasi'])){
            $Validasi = $_POST['validasi'];
        }
        $this->Validasi = $Validasi;
    }
    function SetStatus(){
        if(isset($_POST['status'])){
            $Status = $_POST['status'];
        }
        $this->Status = $Status;
    }
    function SetCari(){
        error_reporting(0);
        if(isset($_GET['cari'])){
            $Cari = htmlentities(htmlspecialchars($_GET['cari']));
        }
        $this->Cari = $Cari;
    }


    function GetIdP(){
        return $this->IdP;
    }
    function GetPihak(){
        return $this->Pihak;
    }
    function GetJenisKasus(){
        return $this->JenisKasus;
    }
    
    function GetNamaP(){
        return $this->NamaP;
    }
    function GetJk(){
        return $this->Jk;
    }
    function GetUmur(){
        return $this->Umur;
    }
    function GetPendidikan(){
        return $this->Pendidikan;
    }
    function GetJob(){
        return $this->Job;
    }
    
    
    function GetHubungan(){
        return $this->Hubungan;
    }
    
    function GetTgl(){
        return $this->Tgl;
    }

    function GetAlamatP(){
        return $this->AlamatP;
    }
    function GetKelP(){
        return $this->KelP;
    }
    
    function GetRtp(){
        return $this->Rtp;
    }
    function GetRwp(){
        return $this->Rwp;
    }
   
    function GetValidasi(){
        return $this->Validasi;
    }
    function GetStatus(){
        return $this->Status;
    }
    
    function GetCari(){
        return $this->Cari;
    }

    function TambahPengaduan(){
        $this->koneksi = new Akses;
        $this->koneksi->link;
        #post biodata
        $this->bio = new Biodata;
        $this->bio->SetNik();
        $this->bio->GetNik();
        $this->bio->SetNama();
        $this->bio->GetNama();
        $this->bio->SetAlamat();
        $this->bio->GetAlamat();
        $this->bio->SetJkl();
        $this->bio->GetJkl();
        $this->bio->SetPendidikan();
        $this->bio->GetPendidikan();
        $this->bio->SetUmur();
        $this->bio->GetUmur();
        $this->bio->SetNotelp();
        $this->bio->GetNotelp();
       
        $this->bio->SetPekerjaan();
        $this->bio->GetPekerjaan();
        $this->bio->SetRt();
        $this->bio->GetRt();
        $this->bio->SetRw();
        $this->bio->GetRw();
        $this->bio->SetKel();
        $this->bio->GetKel();
        $alamat = $this->bio->Alamat." ".$this->bio->Kel." ".$this->bio->Rt." ".$this->bio->Rw;
       
        #post pengaduan
        $this->pgdn = new Pengaduan;
        $this->pgdn->SetIdp();
        $this->pgdn->GetIdp();
        $this->pgdn->SetPihak();
        $this->pgdn->GetPihak();
        $this->pgdn->SetJenisKasus();
        $this->pgdn->GetJenisKasus();
       
        $this->pgdn->SetNamaP();
        $this->pgdn->GetNamaP();
        $this->pgdn->SetJk();
        $this->pgdn->GetJk();
        $this->pgdn->SetUmur();
        $this->pgdn->GetUmur();
        $this->pgdn->SetPendidikan();
        $this->pgdn->GetPendidikan();
        $this->pgdn->SetJob();
        $this->pgdn->GetJob();
        $this->pgdn->SetHubungan();
        $this->pgdn->GetHubungan();
        $this->pgdn->SetTgl();
        $this->pgdn->GetTgl();
        $this->pgdn->SetAlamatP();
        $this->pgdn->GetAlamatP();
        $this->pgdn->SetKelP();
        $this->pgdn->GetKelP();
        $this->pgdn->SetRtp();
        $this->pgdn->GetRtp();
        $this->pgdn->SetRwp();
        $this->pgdn->GetRwp();
       
        $this->pgdn->SetValidasi();
        $this->pgdn->GetValidasi();
        $this->pgdn->SetStatus();
        $this->pgdn->GetStatus();
      
       
       $alamat1 = $this->pgdn->AlamatP." ".$this->pgdn->KelP." ".$this->pgdn->Rtp." ".$this->pgdn->Rwp;
         #post gambar

     /*  $data = mysqli_query($this->koneksi->link,"select max(id_gbr) from bukti_gambar");
       $dt = mysqli_fetch_array($data);
       if ($dt) {
        $nilaikode = substr($dt[0], 6);
        // menjadikan $nilaikode ( int )
        $kode = (int) $nilaikode;
        // setiap $kode di tambah 1
        $kode = $kode + 1;
        $format = date('my').str_pad($kode, 4, "0", STR_PAD_LEFT);
         } else {
        $format = date('my')."001";
         }
         //echo $format;
         
        
         $nama = $_FILES['bukti']['name'];
         $ukuran = $_FILES['bukti']['size'];
         $tipe = $_FILES['bukti']['type'];
         $lok = $_FILES['bukti']['tmp_name'];*/
        

       $biodata = mysqli_query($this->koneksi->link,"insert ignore into biodata values('".$this->bio->Nik."',
       '".$this->bio->Nama."','".$this->bio->Umur."','".$this->bio->Jkl."','".$alamat."','".$this->bio->Pendidikan."',
       '".$this->bio->Notelp."','".$this->bio->Pekerjaan."')"); 

       $pengaduan = mysqli_query($this->koneksi->link,"insert into pengaduan values ('".$this->pgdn->Idp."','".$this->bio->Nik."','".$this->pgdn->Pihak."',
       '".$this->pgdn->JenisKasus."','".$this->pgdn->NamaP."','".$this->pgdn->Jk."','".$this->pgdn->Umur."','".$alamat1."',
       '".$this->pgdn->Pendidikan."','".$this->pgdn->Job."','".$this->pgdn->Hubungan."',
       '".$this->pgdn->Tgl."','".$this->pgdn->Validasi."','".$this->pgdn->Status."')");
        
       
        if(($biodata)&&($pengaduan)){
            echo "<script>alert('Terima Kasih Telah Melakukan Pengaduan, Silahkan Cek Proses Secara Berkala');</script>";
            echo "<script>document.location.href='index.php';</script>";   
        }
        else {
            echo "<script>alert('Ada Kesalahan, Mohon Cek Kembali');</script>";
            echo "<script>window.history.back();</script>";

        }
       /* if ($biodata){
            if($pengaduan || $ukuran <=2000000 || $tipe == "image/jpeg"  || $tipe == "image/png"){
                $path ="img/bukti/".$nama;
                move_uploaded_file($lok,$path);
                $bukti = mysqli_query($this->koneksi->link,"INSERT into bukti_gambar values ('".$format."','".$this->pgdn->Idp."','".$ukuran."','".$nama."','".$tipe."')");    
                if(($biodata) || ($pengaduan) || ($bukti)){
                    echo "<script>alert('Terima Kasih Telah Melaukan Pengaduan, Silahkan Cek Proses Secara Berkala');</script>";
                    echo "<script>document.location.href='index.php';</script>";
                } else {
                    echo "<script>alert('Ada Kesalahan Pada Upload Gambar');</script>";
                    echo "<script>window.history.back();</script>";
                }    

            } else {
                echo "<script>alert('Ada Kesalahan Pada Data Umum');</script>";
                echo "<script>window.history.back();</script>";
             }       
     } else {
        echo "<script>alert('Ada Kesalahan Pada Data Informan Kasus');</script>";
        echo "<script>window.history.back();</script>";
     } 
     
      
         
    //echo"<script>alert('Data Belum Lengkap');</script>";
        //echo "<script>document.location.href='form_pengaduan.php';</script>";
    }*/
}

function StatusProsesPengaduan(){
    $this->koneksi = new Akses;
    $this->koneksi->link;
    $this->pgdn = new Pengaduan;
    $this->pgdn->SetCari();
    $this->pgdn->GetCari();
    $data = mysqli_query($this->koneksi->link,"select biodata.nama,pengaduan.tgl,pengaduan.status from biodata,pengaduan where pengaduan.nik=biodata.nik and id_pengaduan='".$this->pgdn->Cari."'");
    echo '
    <div class="container">
       <div class="card col-sm-12" style="box-shadow:5px 5px 5px #d3d3d3;">
       <div class="card-header">
         <h4 class="card-title">Status Proses Pengaduan</h4>
       </div>
     <div class="card-body">
       <p><i class="fas fa-id-card" aria-hidden="true"></i> ID Pengaduan Anda : '.$this->pgdn->Cari.'</p>
       <br>
       <div class="table-responsive">
       <table class="table table-hover table-bordered ">
         <thead class="text-center" style="background:#bebebe;color:white;">
           <th>Nama</th>
           <th>Tanggal Lapor</th>
           <th>Status</th>
         </thead>';
         while($fdata = mysqli_fetch_array($data)){
         
       echo  '<tbody>
       <tr>';
        echo'<td>'.$fdata['nama'].'</td>';
        echo'<td>'.$fdata['tgl'].'</td>';        
         echo'<td>'.$fdata['status'].'</td>';
    echo'</tr>  
       </tbody>';
        }
       echo'</table>
       </div>
     </div>
     <p><i>Note</i> : Terima Kasih telah melakukan laporan pengaduan tindak kekerasan, Laporan sudah kami terima dan akan ditindaklanjuti segera,
   petugas kami akan menghubungi bapak/ibu melalui saluran telepon. P2TP2A Karawang </p>
     </div>
    
    </div>';
   
}

}

?>