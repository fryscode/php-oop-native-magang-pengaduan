<?php
    require_once "ClassLogin.php";
    class Akses{
        var $username, $password, $host ,$namaDB, $link;

        function __construct()
        {
            $this->username='root';
            $this->password='kinar!@#';
            $this->host='localhost';
            $this->namaDB='p2tp2a';
            $this->link = mysqli_connect("$this->host","$this->username","$this->password","$this->namaDB");

        }

        function BukaDB(){
            if(!$this->link){
                echo "Error: Unable to connect to MySQL" . PHP_EOL;
                exit;
            }
        }

        function TutupDB(){
            mysqli_close($this->link);
            if(!$this->link){
                echo "Error: Unable to close connection MySQL" . PHP_EOL;
            }
        }

        function CekSesi(){
            session_start();
            error_reporting(0);
            if($_SESSION['id_ptgs'] == ''){
                echo "<script>alert('Akses Ditolak');</script>";
                echo "<script>window.open('../index.php','_top');</script>";
                exit();
            }
        }
        function HakAkses(){
            error_reporting(0);
            if($_SESSION['grup'] == 'petugas'){
                echo "<script>alert('Anda Tidak Punya Izin Untuk Mengakses');</script>";
                echo "<script>window.open('../index.php','_top');</script>";
                exit();
            }
        }
    }

?>
