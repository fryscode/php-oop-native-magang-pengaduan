<?php
require_once "ClassLogin.php";
require_once "ClassAkses.php";
require_once "ClassPengaduan.php";
require_once "ClassBiodata.php";
require_once "ClassMain.php";

class Petugas extends Login{
    var $Id, $Nama, $Jk, $Alamat, $Notelp, $Email, $Pass,$Cari,$Grup;
    
    function SetId(){
        if(isset($_POST['id'])){
            $Id = $_POST['id'];
        }
        else if(isset($_GET['key'])){
            $Id = $_GET['key'];
        }
        else{
            $Id = '';
        }
        $this->Id = $Id;
    }

    function SetNama(){
        if(isset($_POST['nama'])){
            $Nama = $_POST['nama'];
        }
        $this->Nama = $Nama;
    }

    function SetJk(){
        if(isset($_POST['jk'])){
            $Jk = $_POST['jk'];
        }
        $this->Jk = $Jk;
    }
    function SetAlamat(){
        if(isset($_POST['alamat'])){
            $Alamat = $_POST['alamat'];
        }
        $this->Alamat = $Alamat;
    }

    function SetNotelp(){
        if(isset($_POST['telp'])){
            $Notelp = $_POST['telp'];
        }
        $this->Notelp = $Notelp;
    }

    function SetEmail(){
        if(isset($_POST['email'])){
            $Email = $_POST['email'];
        }
        $this->Email = $Email;
    }
    function SetPass(){
        if(isset($_POST['password'])){
            $Pass = password_hash(($_POST['password']),PASSWORD_DEFAULT);
           
        }
        $this->Pass = $Pass;
    }
    function SetCari(){
        error_reporting(0);
        if(isset($_GET['cari'])){
            $Cari = $_GET['cari'];
        }
        $this->Cari = $Cari;
    }
    function SetGrup(){
        if(isset($_POST['grup'])){
            $Grup = $_POST['grup'];
        }
        $this->Grup = $Grup;
    }

    function GetGrup(){
        return $this->Grup;
    }

    function GetId(){
        return $this->Id;
    }
    function GetNama(){
        return $this->Nama;
    }
    function GetJk(){
        return $this->Jk;
    }
    function GetNotelp(){
        return $this->Notelp;
    }
    function GetEmail(){
        return $this->Email;
    }
    function GetPass(){
        return $this->Pass;   
    }
    function GetAlamat(){
        return $this->Alamat;
    }
    function GetCari(){
        return $this->Cari;
    }

    function LihatPengaduanPetugas(){
        $main = new Main;
        $main->HalamanPetugas();
        $main = new Main;
            echo'<br><br><br>';
            $this->cari = new Pengaduan;
            $this->cari->SetCari();
            $this->cari->GetCari();
           $data = mysqli_query($this->koneksi->link,"select * from pengaduan where id_pengaduan like '".$this->cari->Cari."%'");
           $row = mysqli_num_rows($data);

            $hal = 5;
            $page = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
            $start = ($page > 1) ? ($page * $hal) - $hal: 0;
            $data2 = mysqli_query($this->koneksi->link,"select * from pengaduan where id_pengaduan like '".$this->cari->Cari."%' limit $start,$hal");
            $pages = ceil($row/$hal);
            echo '
            <div class="col-lg-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-header bg-success text-white">
            <center><h4 class="card-title">Data Pengaduan</h4></center>  
            </div>
            
            <div class="card-body">
                <form action="lihat_pgdn_ptgs.php" method=get>
                <div class="form-group">
               &nbsp; <button class="btn btn-primary" type="submit"><i class="fa fa-search"aria-hidden=true></i> Cari</button> 
                <input type=text class="col-xs-4" placeholder="ID Pengaduan" name="cari" >
                
              
                </form></div>
                <div class="table-responsive pt-3">
            <table class="table table-hover table-bordered table-sm">
               <thead class="text-center" style="background:#bebebe;color:white;">
                   <th>No</th>
                   <th>ID</th>
                   
                   <th>Jenis Kelamin</th>
                   <th>Umur</th>
                   <th>Alamat</th>
                   <th>Pendidikan</th>
                   <th>Jenis Kasus</th>
                   <th>Hubungan</th>
                   <th>Tanggal Pengaduan</th>
                   <th>Validasi</th>
                   <th>Status</th>
                   
               </thead>';
               $no = 1;
               while($fdata = mysqli_fetch_array($data2)){

              echo '<tbody>
                <tr>';
                 echo '<td>'.$no++.'</td>';
                 echo '<td>'.$fdata['id_pengaduan'].'</td>';
                 echo '<td>'.$fdata['jk'].'</td>';
                 echo '<td>'.$fdata['umur'].' Tahun</td>';
                 echo '<td>'.$fdata['alamat'].'</td>';
                 echo '<td>'.$fdata['pendidikan'].'</td>';
                 echo '<td>'.$fdata['jenis_kasus'].'</td>';  
                 echo '<td>'.$fdata['hubungan'].'</td>';
                 echo '<td>'.$fdata['tgl'].'</td>';
                 echo '<td>'.$fdata['validasi'].'</td>';
                 echo '<td>'.$fdata['status'].'</td>';
                 
                 
               echo '</tr>
              </tbody>';
              
               }
               echo '</table></div></div></div></div>';
               echo '<br>';

               echo '<ul class="pagination justify-content-center">';
                        for($i=1;$i<=$pages;$i++){
                          
                            echo '<li class="page-item"><a class="page-link" style="text-decoration:none;background:#008b8b;color:white" href="lihat_pgdn_ptgs.php?hal='.$i.'"> '.$i.' </a></li>';
                          }
                          
                   echo '</ul>';
               echo '<br><br><br>';
         $main->Footer();
      }

      function SimpanValidasi(){
        $this->koneksi = new Akses;
        $this->koneksi->link;
        $id = base64_decode($_GET['id']); 
        $nik = base64_decode($_GET['nik']);
        $vid = htmlspecialchars($_POST['vid']);
        $vtgl = htmlentities($_POST['vtgl']);
        $lptgs = htmlspecialchars($_POST['lptgs']);
        $vjenis = htmlspecialchars($_POST['vjenis']);
      
        $vkec = htmlspecialchars($_POST['vkec']);
       // $vjk = htmlspecialchars($_POST['vjk']);
        // $vkategori = htmlspecialchars($_POST['vkategori']);
        


        $verifikasi = mysqli_query($this->koneksi->link,"INSERT into verifikasi values
       ('".$vid."','".$id."','".$lptgs."','".$vkec."','".$vjenis."','".$vtgl."')");

        $data = mysqli_query($this->koneksi->link,"UPDATE pengaduan set validasi='Verified'
        where pengaduan.id_pengaduan = '$id' and pengaduan.nik='$nik'");

        if(($data) && ($verifikasi)){
            echo '<script>alert("Berhasil diverifikasi");</script>';
            echo "<script>document.location.href='form_petugas.php';</script>";
        }else{
            echo '<script>alert("Gagal Memverifikasi");</script>';
            echo "<script>window.history.back();</script>";
            

        }
      }
      function SimpanValidasi2(){
        
            $this->koneksi = new Akses;
            $this->koneksi->link;
    
           // $this->bio = new Biodata;
            $id = base64_decode($_GET['id']);
            //$this->bio->GetNik();
           // $this->pgdn = new Pengaduan;
            $nik = base64_decode($_GET['nik']);
    
            $data = mysqli_query($this->koneksi->link,"UPDATE pengaduan set validasi='Tidak Valid'
            where pengaduan.id_pengaduan = '$id' and pengaduan.nik='$nik'");
    
            if($data){
                echo '<script>alert("Berhasil diverifikasi");</script>';
                echo "<script>document.location.href='form_petugas.php';</script>";
            }else{
                echo '<script>alert("Gagal memverifikasi");</script>';
                echo "<script>window.history.back();</script>";
               // echo  $id;
               // echo '<br>';
               // echo $nik;
            }
      }
}

?>