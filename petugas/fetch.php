<?php
   $con = mysqli_connect("localhost","root","kinar!@#","p2tp2a");
   
   if(isset($_POST['view'])){

      // $con = mysqli_connect("localhost", "root", "", "notif");
      
      if($_POST["view"] != '')
      {
         // $update_query = "UPDATE pengaduan SET notif = 1 WHERE notif=0";
          //mysqli_query($con, $update_query);
      }
   
   $data = mysqli_query($con,"SELECT biodata.alamat,biodata.no_telp,pengaduan.id_pengaduan,pengaduan.nik,pengaduan.jenis_kasus,pengaduan.validasi from pengaduan,biodata
    where pengaduan.nik=biodata.nik and validasi='Unverified'");
   $dt = mysqli_num_rows($data);
   $output='';
   if($dt > 0){
    while($fdata = mysqli_fetch_array($data)){
      $output .= '<hr>
      <a href="validasilaporan.php?id='.base64_encode($fdata['id_pengaduan']).'&nik='.base64_encode($fdata['nik']).'">No.Registrasi : '.$fdata['id_pengaduan'].'</a>&nbsp;&nbsp; <a href="#" class="btn btn-danger sm">'.$fdata['validasi'].'</a>
      <li class="card-text t-1">Jenis Kasus    : '.$fdata['jenis_kasus'].'</li>
      <li class="card-text t-1">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$fdata['alamat'].'</li>
      <li class="card-text t-1">No.Telepon     &nbsp;&nbsp;: '.$fdata['no_telp'].'</li>
      <li class="card-text t-1">Validasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$fdata['validasi'].'</li>
      <hr>';
    }
    
   }

   else{
     // echo '<li class="card-text t-1">Tidak Ada Pengaduan Baru</li>';
     $output .= '
     <li class="card-text t-1">Tidak Ada Pengaduan Baru</li>';
   }

   $status_query = "select * from pengaduan where validasi = 'Unverified' order by id_pengaduan desc";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

   }
?>