<?php
require_once "ClassAkses.php";

class Login{
    var $username, $password;

    function __construct(){
        $this->koneksi = new Akses;
        $this->koneksi->BukaDB();

        if(isset($_POST['id_ptgs'])){
            $this->username = strip_tags(mysqli_real_escape_string($this->koneksi->link,trim($_POST['id_ptgs'])));
        }
        if(isset($_POST['password'])){
            $this->password = strip_tags(mysqli_real_escape_string($this->koneksi->link,trim($_POST['password'])));
        
        }
    }
    function __destruct()
    {
        $this->koneksi = new Akses;
        $this->koneksi->TutupDB();
    }

    function Dologin(){
        $login = mysqli_query($this->koneksi->link,"select * from petugas where id = '$this->username'");
        $data = mysqli_fetch_array($login);
        $password_hash = $data['pass'];        
           if(($this->username != $data['id']) || (password_verify($this->password,$password_hash)!= $password_hash)){
            echo "<script>alert('Password Atau Username Salah');</script>";
            echo "<script>document.location.href ='login.php';</script>";     
           //echo $this->username.$this->password;
        }
           else{
            
            @session_start();
                $_SESSION['id_ptgs'] = $data['id'];
                $_SESSION['nm'] = $data['nama_ptgs'];
                $_SESSION['grup'] = $data['grup'];
               if($data['grup']=="admin"){
                    echo "<script>document.location.href='admin/form_admin.php';</script>";
                }
                   else if($data['grup']=="petugas"){
                        echo"<script>document.location.href='petugas/form_petugas.php';</script>";
                    }         
            //session_start();
           //$_SESSION['id_ptgs'] = $data['id'];
           //$_SESSION['nm'] = $data['nama_ptgs'];
           //$_SESSION['grup'] = $data['grup'];
    
    }
     
    }
        
    function Dologout(){
        session_start();
        session_destroy();
        echo "<script>window.open('index.php','_top')</script>";
    }
}

?>
