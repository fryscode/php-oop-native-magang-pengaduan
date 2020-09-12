<?php
    require_once "ClassLogin.php";
    require_once "ClassMain.php";
    require_once "ClassPetugas.php";
    require_once "ClassPengaduan.php";
    require_once "ClassBiodata.php";
    require_once "ClassWilayah.php";

    class Admin extends Petugas{
        function TambahPetugas(){
            $this->ptgs = new Petugas;
            $this->ptgs->SetId();
            $this->ptgs->GetId();
            $this->ptgs->SetNama();
            $this->ptgs->SetJk();
            $this->ptgs->GetJk();
            $this->ptgs->SetAlamat();
            $this->ptgs->GetAlamat();
            $this->ptgs->SetNotelp();
            $this->ptgs->GetNotelp();
            $this->ptgs->SetEmail();
            $this->ptgs->GetEmail();
            $this->ptgs->SetPass();
            $this->ptgs->GetPass();
           // $this->ptgs->SetCari();
           // $this->ptgs->GetCari();
            $this->ptgs->SetGrup();
            $this->ptgs->GetGrup();

            $tambahptgs = mysqli_query($this->koneksi->link,"insert into petugas
            values('".$this->ptgs->Id."','".$this->ptgs->Nama."',
                  '".$this->ptgs->Jk."','".$this->ptgs->Alamat."',
                  '".$this->ptgs->Email."','".$this->ptgs->Notelp."',
                  '".$this->ptgs->Pass."','".$this->ptgs->Grup."')");
        
            if($tambahptgs){
                echo "<script>alert('Data Baru Berhasil Disimpan');</script>";
                echo "<script>document.location.href='lihat_petugas.php';</script>";
            }
            else{
                echo "<script>alert('Gagal Menyimpan Data');</script>";
                echo "<script>window.history.back();</script>";
            }
        }
        
        function LihatPetugas(){
          //echo '<a href="#" class="btn btn-primary"><i class="fas fa-print"></i> Cetak</a>';
          $main = new Main;
            $main->HalamanAdmin();
            $this->cari = new Petugas;
            $this->cari->SetCari();
            $this->cari->GetCari();
            echo "<br>
            <br><br>";
            $this->koneksi = new Akses;
            $this->koneksi->link;
            $data = mysqli_query($this->koneksi->link,"SELECT * from petugas where id like '".$this->cari->Cari."%'or nama_ptgs like '".$this->cari->Cari."'");
            echo '<div class="col-lg-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-header bg-success text-white">
                <center><h4 class="card-title">Data Petugas</h4></center>
                </div>
                <br><br>
                <div class="card-body">
                <form action="lihat_petugas.php" method=get>
                <div class="form-group">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"aria-hidden=true></i> Cari</button> 
                <input type=text class="col-xs-4" placeholder="Cari" name="cari" >
                <a href="form_tbh_admin.php" class="btn btn-danger"><i class="far fa-plus-square"></i> Tambah Data</a>
          
                </form></div>
                <div class="table-responsive pt-3">
            <table class="table table-hover table-bordered table-sm">
               <thead class="text-center" style="background:#bebebe;color:white;">
                   <th>No</th>
                   <th>ID</th>
                   <th>Nama</th>
                   <th>Jenis Kelamin</th>
                   <th>Alamat</th>
                   <th>E-Mail</th>
                   <th>No Telp</th>
                   <th>Status</th>
                   <th colspan="3">Aksi</th>
               </thead>';
             $no = 1;
             while($fdata = mysqli_fetch_array($data)){
               echo '<tbody>
                     <tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$fdata[0].'</td>';
                    echo '<td>'.$fdata[1].'</td>';
                    echo '<td>'.$fdata[2].'</td>';
                    echo '<td>'.$fdata[3].'</td>';
                    echo '<td>'.$fdata[4].'</td>';
                    echo '<td>'.$fdata[5].'</td>';
                    echo '<td>'.$fdata[7].'</td>';
                    echo "<td><center><a class='btn btn-primary btn-sm' href=form_edit.php?key=".base64_encode($fdata[0])."><i class='fas fa-edit'></i>Edit</a></td></center>
                         <td><center><a class='btn btn-primary btn-sm' href=konfirmasi_hapus.php?key=".base64_encode($fdata[0])."><i class='far fa-trash-alt'></i> Hapus</a></td></center>
                         <td><center><a href=change_ps.php?key=".base64_encode($fdata[0])." class='btn btn-primary btn-sm'>Ganti Password</a></td></center>";
                    echo '</tr>
               </tbody>';
               $no++;
             }
            echo '</table></div></div></div></div>';
            echo '<br><br><br>';
         $main->Footer();
          }

          function HapusPetugas(){
            $this->petugas = new Petugas;
            $this->petugas->SetId();
            $this->petugas->Getid();
            $hapusptgs= mysqli_query($this->koneksi->link,"DELETE from petugas where id ='".$this->petugas->Id."' ");
            if($hapusptgs){
              echo "<script>alert('Data Berhasil Dihapus');</script>";
              echo "<script>document.location.href='lihat_petugas.php';</script>";
            }else{
              echo "<script>alert('Gagal Hapus Data');</script>";
              echo "<script>document.location.herf='lihat_petugas.php'</script>";
            }
          }

          function EditPetugas(){
           // $this->koneksi = new Akses;
           // $this->koneksi->link;
            $this->ptgs = new Petugas;
            $this->ptgs->SetId();
            $this->ptgs->GetId();
            $this->ptgs->SetNama();
            $this->ptgs->SetJk();
            $this->ptgs->GetJk();
            $this->ptgs->SetAlamat();
            $this->ptgs->GetAlamat();
            $this->ptgs->SetNotelp();
            $this->ptgs->GetNotelp();
            $this->ptgs->SetEmail();
            $this->ptgs->GetEmail();
            //$this->ptgs->SetPass();
            //$this->ptgs->GetPass();
            $this->ptgs->SetGrup();
            $this->ptgs->GetGrup();
            $simpan = mysqli_query($this->koneksi->link,"UPDATE petugas set nama_ptgs ='".$this->ptgs->Nama."'
            ,jk = '".$this->ptgs->Jk."', alamat = '".$this->ptgs->Alamat."',email = '".$this->ptgs->Email."',
            no_telp = '".$this->ptgs->Notelp."',grup = '".$this->ptgs->Grup."' where id ='".$this->ptgs->Id."'");
            if($simpan){
              echo "<script>alert('Data Berhasil Diperbaharui');</script>";
              echo "<script>document.location.href='lihat_petugas.php';</script>";
            }
            else{
              echo "<script>alert('Data Gagal Diperbaharui');</script>";
              echo "<script>document.location.href='lihat_petugas.php';</script>";
            
            //pass = '".$this->ptgs->Pass."',
            } 
          }
          function ChangePs(){
            
            $this->ptgs = new Petugas;
            $this->ptgs->SetId();
            $this->ptgs->GetId();
            $this->ptgs->SetPass();
            $this->ptgs->GetPass();
            $idp = htmlspecialchars(base64_decode(urldecode($_GET['i'])));
            $cek = mysqli_query($this->koneksi->link,"SELECT * from petugas where id = '$idp' ");
            $data = mysqli_fetch_array($cek); 
            $mail= $data['email'];
            $passwordbr = $_POST['passwordbr'];
            $passwordcf = $_POST['passwordcf'];
            $email = htmlspecialchars(htmlentities(strip_tags($_POST['email'])));
            
           
            
            //echo $id;
            //echo $mail;
            //echo $mail;
            //echo $_SESSION['id_ptgs'];
            
            if($email == $mail ){
                if($passwordbr==$passwordcf){
                  $password = password_hash($passwordbr, PASSWORD_DEFAULT);
                  $this->ptgs->Pass = $password;
                  //echo $this->ptgs->Pass;
                  $update = mysqli_query($this->koneksi->link,"UPDATE petugas set pass ='".$this->ptgs->Pass."' where id = '$idp'");
                  if($update){
                    echo "<script>alert('Password Berhasil Di Ganti, Silahkan Login Dengan Password Baru');</script>";
                    echo "<script>window.location.href='lihat_petugas.php';</script>";
                  }
                  else{
                    echo "<script>alert('Password Gagal Di Rubah');</script>";
                    echo "<script>window.history.back();</script>";
                  }
                
                }else{
                  echo "<script>alert('Password Tidak Sama');</script>";
                  echo "<script>window.history.back();</script>";
                }

            }
            else {
              echo "<script>alert('Email Salah');</script>";
              echo "<script>window.history.back();</script>";
            }

          }

          function LihatPengaduan(){
            $main = new Main;
            $main->HalamanAdmin();
            echo'<br><br><br>';
            $this->cari = new Pengaduan;
            $this->cari->SetCari();
            $this->cari->GetCari();
           $data = mysqli_query($this->koneksi->link,"select * from pengaduan where id_pengaduan like '".$this->cari->Cari."%' or nm_pelaku like'".$this->cari->Cari."%'");
           $row = mysqli_num_rows($data);

            $hal = 5;
            $page = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
            $start = ($page > 1) ? ($page * $hal) - $hal: 0;
            $data2 = mysqli_query($this->koneksi->link,"select * from pengaduan where id_pengaduan like '".$this->cari->Cari."%' or nm_pelaku like'".$this->cari->Cari."%' limit $start,$hal");
            $pages = ceil($row/$hal);
            echo '
            <div class="col-lg-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-header bg-success text-white">
            <center><h4 class="card-title">Data Pengaduan</h4></center>  
            </div>
            <div class="card-body">

            <form action="cetak_pgdn.php" method="POST" target=_blank class="float-right"> 
            <div class="form-row">
            <div class="form-group col-sm-4 col-md-4">
              <label>Cetak Dari :</label>
              <input type="date" name="from" class="form-control" >
            </div>

            <div class="form-group col-sm-4 col-md-4">
              <label>Sampai Dengan :</label>
              <input type="date" name="end" class="form-control" >
            </div>
            </div>  
            <button class="btn btn-primary sm" type="submit"><i class="fa fa-print"aria-hidden=true></i> Cetak</button>
            <br><br>
            </form>
            

                <form action="lihat_pengaduan.php" method=get>
                <div class="form-group"><br>
               &nbsp; <button class="btn btn-primary" type="submit"><i class="fa fa-search"aria-hidden=true></i> Cari</button> 
                <input type=text class="col-xs-4" placeholder="ID atau Nama" name="cari" >
                
               
                </form></div>
                <div class="table-responsive pt-3">
            <table class="table table-hover table-bordered table-sm">
               <thead class="text-center" style="background:#bebebe;color:white;">
                   <th>No</th>
                   <th>ID</th>
                   <th>Nama Pelaku</th>
                   <th>Jenis Kelamin</th>
                   <th>Umur</th>
                   <th>Alamat Pelaku</th>
                   <th>Pendidikan</th>
                   <th>Jenis Kasus</th>
                   <th>Hubungan</th>
                   <th>Tanggal Pengaduan</th>
                   <th>Validasi</th>
                   <th>Status</th>
                   <th colspan="2" class="text-center">Aksi</th>
               </thead>';
               $no = $start+1;
               while($fdata = mysqli_fetch_array($data2)){

              echo '<tbody>
                <tr>';
                 echo '<td>'.$no++.'</td>';
                 echo '<td>'.$fdata['id_pengaduan'].'</td>';
                 echo '<td>'.$fdata['nm_pelaku'].'</td>';
                 echo '<td>'.$fdata['jk'].'</td>';
                 echo '<td>'.$fdata['umur'].' Tahun</td>';
                 echo '<td>'.$fdata['alamat'].'</td>';
                 echo '<td>'.$fdata['pendidikan'].'</td>';
                 echo '<td>'.$fdata['jenis_kasus'].'</td>';  
                 echo '<td>'.$fdata['hubungan'].'</td>';
                 echo '<td>'.$fdata['tgl'].'</td>';
                 echo '<td>'.$fdata['validasi'].'</td>';
                 echo '<td>'.$fdata['status'].'</td>';
                 
                 echo "<td><a class='btn btn-primary btn-sm' href=form_edit_pengaduan.php?key=".base64_encode($fdata['id_pengaduan'])."><i class='fas fa-edit'></i>Edit</a></td>
                       <td><a class='btn btn-primary btn-sm' href=konfirmasi_hapus_pgdn.php?key=".base64_encode($fdata['id_pengaduan'])."><i class='far fa-trash-alt'></i>&nbsp;Hapus</a></td>";
               echo '</tr>
              </tbody>';
              
               }
               echo '</table></div></div></div></div>';
               echo '<br>';

               echo '<ul class="pagination justify-content-center">';
                        for($i=1;$i<=$pages;$i++){
                          
                            echo '<li class="page-item"><a class="page-link" style="text-decoration:none;background:#008b8b;color:white" href="lihat_pengaduan.php?hal='.$i.'"> '.$i.' </a></li>';
                          }
                          
                   echo '</ul>';
               echo '<br><br><br>';

              #biodata pelapor
              $this->cari = new Biodata;
              $this->cari->SetCari();
              $this->cari->GetCari();
             $data = mysqli_query($this->koneksi->link,"select * from biodata where nik like '".$this->cari->Cari."%' or nama like'".$this->cari->Cari."%'");
             $row = mysqli_num_rows($data);
  
              $hal = 5;
              $page = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
              $start = ($page > 1) ? ($page * $hal) - $hal: 0;
              $data2 = mysqli_query($this->koneksi->link,"select * from biodata where nik like '".$this->cari->Cari."%' or nama like'".$this->cari->Cari."%' limit $start,$hal");
              $pages = ceil($row/$hal);
              echo '
              <div class="col-lg-12 col-sm-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-header bg-success text-white">
              <center><h4 class="card-title">Data Pelapor</h4></center>  
              </div>
              <div class="card-body">
  
                  <form action="lihat_pengaduan.php" method=get>
                  <div class="form-group"><br>
                 &nbsp; <button class="btn btn-primary" type="submit"><i class="fa fa-search"aria-hidden=true></i> Cari</button> 
                  <input type=text class="col-xs-4" placeholder="ID atau Nama" name="search"> &nbsp;
                  <a class="btn btn-primary" href="cetak_biodata.php" target=_blank><i class="fa fa-print" aria-hidden=true></i> Cetak Biodata</a>
                  
                 
                  </form></div>
                  <div class="table-responsive pt-3">
              <table class="table table-hover table-bordered table-sm">
                 <thead class="text-center" style="background:#bebebe;color:white;">
                     <th>No</th>
                     <th>NIK</th>
                     <th>Nama</th>
                     <th>Umur</th>
                     <th>Jenis Kelamin</th>
                     <th>Alamat Pelapor</th>
                     <th>Pendidikan</th>
                     <th>No.Telepon</th>
                     <th>Pekerjaan</th>
          
                 </thead>';
                 $no = $start+1;
                 while($fdata = mysqli_fetch_array($data2)){
  
                echo '<tbody>
                  <tr>';
                   echo '<td>'.$no++.'</td>';
                   echo '<td>'.$fdata['nik'].'</td>';
                   echo '<td>'.$fdata['nama'].'</td>';
                   echo '<td>'.$fdata['umur'].'</td>';
                   echo '<td>'.$fdata['jk'].'</td>';
                   echo '<td>'.$fdata['alamat'].'</td>';
                   echo '<td>'.$fdata['pendidikan'].'</td>';
                   echo '<td>'.$fdata['no_telp'].'</td>';  
                   echo '<td>'.$fdata['pekerjaan'].'</td>';
                   
                 echo '</tr>
                </tbody>';
                
                 }
                 echo '</table></div></div></div></div>';
                 echo '<br>';
  
                 echo '<ul class="pagination justify-content-center">';
                          for($i=1;$i<=$pages;$i++){
                            
                              echo '<li class="page-item"><a class="page-link" style="text-decoration:none;background:#008b8b;color:white" href="lihat_pengaduan.php?hal='.$i.'"> '.$i.' </a></li>';
                            }
                            
                     echo '</ul>';

               echo '<br><br><br>';
         $main->Footer();
              // echo " <td><a class='btn btn-primary btn-sm' href=konfirmasi_hapus_pgdn.php?key=".base64_encode($fdata['id_pengaduan'])."><i class='fas fa-print'></i>&nbsp;Cetak</a></td>";
          }
          function EditPengaduan(){
            $this->pgdn = new Pengaduan;
            $this->pgdn->SetIdp();
            $this->pgdn->GetIdp();
            $this->pgdn->SetStatus();
            $this->pgdn->GetStatus();

            $data = mysqli_query($this->koneksi->link,"UPDATE pengaduan set status ='".$this->pgdn->Status."' where id_pengaduan = '".$this->pgdn->Idp."'");
            if($data){
              echo "<script>alert('Berhasil diperbaharui')</script>";
              echo "<script>document.location.href='lihat_pengaduan.php';</script>";
              
            }
            else{
              echo "<script>alert('Gagal diperbaharui')</script>";
              echo "<script>document.location.href='lihat_pengaduan.php';</script>";
            }

          }

          function HapusPengaduan(){
            $this->pgdn = new Pengaduan;
            $this->pgdn->SetIdp();
            $this->pgdn->GetIdp();
            $hapuspgdn= mysqli_query($this->koneksi->link,"DELETE from pengaduan where id_pengaduan ='".$this->pgdn->Idp."'");
            if($hapuspgdn){
              echo "<script>alert('Data Berhasil Dihapus');</script>";
              echo "<script>document.location.href='lihat_pengaduan.php';</script>";
            }
            else{
              echo "<script>alert('Gagal Hapus Data');</script>";
              echo "<script>document.location.herf='lihat_pengaduan.php'</script>";
            }
          
          }
          function ProsesPengaduan(){
            $this->pgdn = new Pengaduan;
            $this->pgdn->SetStatus();
            $this->pgdn->GetStatus();
            $id = $_GET['id'];
            $nik = $_GET['nik'];

            $data = mysqli_query($this->koneksi->link,"UPDATE pengaduan set status ='".$this->pgdn->Status."' where pengaduan.id_pengaduan ='$id' and
            pengaduan.nik ='$nik'");

            if($data){
              echo '<script>alert("Berhasil diperbaharui");</script>';
              echo '<script>document.location.href="lihat_pengaduan.php";</script>';
            }
            else {
              echo '<script>alert("Gagal diperbaharui");</script>';
              echo '<script>window.history.back();</script>';
             //echo $this->pgdn->Status;
            }
          }

          function LihatWilayah(){
            $main = new Main;
            $main->HalamanAdmin();
            $this->cari = new Wilayah;
            $this->cari->SetCari();
            $this->cari->GetCari();
           $data = mysqli_query($this->koneksi->link,"SELECT kc.id_kec, nama_wil, id_kel, nama_wil, nama FROM kecamatan kc join kelurahan kl on kc.id_kec = kl.id_kec 
           where kc.id_kec like'".$this->cari->Cari."%' or nama_wil like'".$this->cari->Cari."%'");
           $row = mysqli_num_rows($data);

            $hal = 25;
            $page = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
            $start = ($page > 1) ? ($page * $hal) - $hal: 0;
            $data2 = mysqli_query($this->koneksi->link,"SELECT kc.id_kec, nama_wil, id_kel, nama_wil, nama FROM kecamatan kc join kelurahan kl on kc.id_kec = kl.id_kec 
            where kc.id_kec like '".$this->cari->Cari."%' or nama_wil like'".$this->cari->Cari."%' limit $start,$hal");
            $pages = ceil($row/$hal);
            
            echo '
            <div class="col-lg-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-header bg-success text-white">
            <center><h4 class="card-title">Data Wilayah</h4></center>  
            </div>
            <div class="card-body">

                <form action="lihat_wilayah.php" method=get>
                <div class="form-group"><br>
               &nbsp; <button class="btn btn-primary" type="submit"><i class="fa fa-search"aria-hidden=true></i> Cari</button> 
                <input type=text class="col-xs-4" placeholder="ID atau Nama" name="cari" >
                <a href="tambah_wilayah.php" class="btn btn-danger"><i class="far fa-plus-square"></i> Tambah Data</a>
                
               
                </form></div>
                <div class="table-responsive pt-3">
            <table class="table table-hover table-bordered table-sm">
               <thead class="text-center" style="background:#bebebe;color:white;">
                   <th>No</th>
                   <th>ID Kecamatan</th>
                   <th>Nama Wilayah</th>
                   <th>ID Kelurahan</th>
                   <th>ID Kecamatan</th>
                   <th>Nama Kelurahan</th>
                   <th colspan=2>Aksi</th>
               </thead>';
               $no = $start+1;
               while($fdata = mysqli_fetch_array($data2)){

              echo '<tbody>
                <tr>';
                 echo '<td>'.$no++.'</td>';
                 echo '<td>'.$fdata['id_kec'].'</td>';
                 echo '<td>'.$fdata['nama_wil'].'</td>';
                 echo '<td>'.$fdata['id_kel'].'</td>';
                 echo '<td>'.$fdata['id_kec'].'</td>';
                 echo '<td>'.$fdata['nama'].'</td>';
                 
                 echo "<td><center><a class='btn btn-primary btn-sm' href=form_edit_wilayah.php?key=".base64_encode($fdata['id_kec'])."&kel=".base64_encode($fdata['id_kel'])."><i class='fas fa-edit'></i>Edit</a></center></td>
                 <td><center><a class='btn btn-primary btn-sm' href=konfirmasi_hapus_wil.php?key=".base64_encode($fdata['id_kec'])."><i class='far fa-trash-alt'></i>&nbsp;Hapus</a></center></td>";

               echo '</tr>
              </tbody>';
              
               }
               echo '</table></div></div></div></div>';
               echo '<br>';

               echo '<ul class="pagination justify-content-center">';
                        for($i=1;$i<=$pages;$i++){
                          
                            echo '<li class="page-item"><a class="page-link" style="text-decoration:none;background:#008b8b;color:white" href="lihat_wilayah.php?hal='.$i.'"> '.$i.' </a></li>';
                          }
                          
                   echo '</ul>';
               echo '<br><br><br>';
         $main->Footer();
          }
          function TambahWilayah(){
            $this->wil = new Wilayah;
            $this->wil->SetIdKec();
            $this->wil->GetIdKec();
            $this->wil->SetNamaWil();
            $this->wil->GetNamaWil();
            $this->wil->SetIdKel();
            $this->wil->GetIdKel();
            $this->wil->SetNama();
            $this->wil->GetNama();
            
            $tambahkec = mysqli_query($this->koneksi->link,"INSERT into kecamatan values('".$this->wil->IdKec."','".$this->wil->NamaWil."')");
            $tambahkel = mysqli_query($this->koneksi->link,"INSERT into kelurahan values('".$this->wil->IdKel."','".$this->wil->IdKec."','".$this->wil->Nama."')");
          
            if( ($tambahkec) && ($tambahkel) ){
              echo "<script>alert('Data baru berhasil disimpan')</script>";
              echo "<script>document.location.href='lihat_wilayah.php';</script>";

            }
            else {
              echo "<script>alert('Data gagal disimpan')</script>";
              echo "<script>window.history.back();</script>";
            }

          }

          function EditWilayah(){
            $this->wil = new Wilayah;
            $this->wil->SetIdKec();
            $this->wil->GetIdKec();
            $this->wil->SetNamaWil();
            $this->wil->GetNamaWil();
            $this->wil->SetIdKel();
            $this->wil->GetIdKel();
            $this->wil->SetNama();
            $this->wil->GetNama();

            $editkec = mysqli_query($this->koneksi->link,"UPDATE kecamatan set nama_wil='".$this->wil->NamaWil."' where id_kec='".$this->wil->IdKec."'");
            $editkel = mysqli_query($this->koneksi->link,"UPDATE kelurahan set nama='".$this->wil->Nama."' where id_kel='".$this->wil->IdKel."' and id_kec='".$this->wil->IdKec."'");

           if( ($editkec) && ($editkel) ){
            echo "<script>alert('Data berhasil diperbaharui')</script>";
            echo "<script>document.location.href='lihat_wilayah.php';</script>";
           }
           else {
            echo "<script>alert('Data gagal diperbaharui')</script>";
            echo "<script>window.history.back();</script>";
           }

          }
          function HapusWilayah(){
            $this->wil = new Wilayah;
            $this->wil->SetIdKec();
            $this->wil->GetIdKec();
            $hapuswil = mysqli_query($this->koneksi->link,"DELETE from kecamatan where id_kec ='".$this->wil->IdKec."'");
            if($hapuswil){
              echo "<script>alert('Data Berhasil Dihapus');</script>";
              echo "<script>document.location.href='lihat_wilayah.php';</script>";
        
            }
            else{
              echo "<script>alert('Gagal Hapus Data');</script>";
              echo "<script>document.location.herf='lihat_wilayah.php'</script>";
          
            }
          }
         
        }
?>