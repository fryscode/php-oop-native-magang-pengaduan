<?php
   $con = mysqli_connect("localhost","root","kinar!@#","p2tp2a");
   
   if(isset($_POST['view'])){

      // $con = mysqli_connect("localhost", "root", "", "notif");
      
      if($_POST['view'] != '')
      {
         // $update_query = "UPDATE pengaduan SET notif = 1 WHERE notif=0";
          //mysqli_query($con, $update_query);
      }
   
   $data = mysqli_query($con,"select * from pengaduan where validasi = 'Verified' and status='Menunggu Konfirmasi' order by id_pengaduan");
   $dt = mysqli_num_rows($data);
   $output='';
   if($dt > 0){
    while($fdata = mysqli_fetch_array($data)){
      $output .= '<hr>
      <a href="statuslaporan.php?id='.base64_encode($fdata[0]).'&nik='.base64_encode($fdata[1]).'">No.Registrasi : '.$fdata['0'].'</a>&nbsp;&nbsp; <a href="#" class="btn btn-success sm">'.$fdata['12'].'</a>
      <li class="card-text t-1">Jenis Kasus : '.$fdata['3'].'</li>
      <li class="card-text t-1">Nama Pelaku      : '.$fdata['4'].'</li>
      <li class="card-text t-1">Validasi     : '.$fdata['12'].'</li>
      <hr>';
    }
    
   }

   else{
     // echo '<li class="card-text t-1">Tidak Ada Pengaduan Baru</li>';
     $output .= '
     <li class="card-text t-1">Tidak Ada Pengaduan Baru</li>';
   }

   $status_query = "select * from pengaduan where validasi = 'Verified' and status='Menunggu Konfirmasi'";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notif' => $output,
    'unseen'  => $count
);

echo json_encode($data);

   }
?>