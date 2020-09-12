<?php

    //require_once "ClassAkses.php";
    //require_once "ClassPengaduan.php";

    class Biodata{
        var $Nik,$Nama,$Alamat,$Kel,$Jkl,$Pendidikan,$Notelp,
        $Pekerjaan,$Rt,$Rw,$Umur,$Cari;
    
    function SetNik(){
        if(isset($_POST['nik'])){
            $Nik = htmlspecialchars($_POST['nik']);
            $this->Nik = $Nik;
        }
    }

    function SetCari(){
        error_reporting(0);
        if(isset($_GET['search'])){
            $Cari = $_GET['search'];
        }
        $this->Cari = $Cari;
    }

    function SetNama(){
        if(isset($_POST['nama'])){
            $Nama = htmlentities(htmlspecialchars($_POST['nama']));    
        }
        $this->Nama = $Nama;
    }
    function SetAlamat(){
        if(isset($_POST['almt'])){
            $Alamat = htmlentities(htmlspecialchars($_POST['almt']));
        }
        $this->Alamat = $Alamat;
    }
    function SetKel(){
        if(isset($_POST['kel'])){
            $Kel = htmlentities(htmlspecialchars($_POST['kel']));
        }
        $this->Kel = $Kel;
    }
    function SetJkl(){
        if(isset($_POST['jkl'])){
            $Jkl = htmlentities(htmlspecialchars($_POST['jkl']));
        }
        $this->Jkl = $Jkl;
    }
    function SetPendidikan(){
        if(isset($_POST['pddkn'])){
            $Pendidikan = htmlentities(htmlspecialchars($_POST['pddkn']));
        }
        $this->Pendidikan = $Pendidikan;
    }
    function SetUmur(){
        if(isset($_POST['umr'])){
            $Umur = htmlentities(htmlspecialchars($_POST['umr']));
        }
        $this->Umur = $Umur;
    }
    function SetNotelp(){
        if(isset($_POST['notelp'])){
            $Notelp = htmlentities(htmlspecialchars($_POST['notelp']));
        }
        $this->Notelp = $Notelp;
    }
    /*function SetEmail(){
        if(isset($_POST['email'])){
            $Email = htmlentities(htmlspecialchars($_POST['email']));
        }
        $this->Email = $Email;
    }*/
    function SetPekerjaan(){
        if(isset($_POST['pekerjaan'])){
            $Pekerjaan = htmlentities(htmlspecialchars($_POST['pekerjaan']));
        }
        $this->Pekerjaan = $Pekerjaan;
    }
        function SetRt(){
            if(isset($_POST['rt'])){
                $Rt = htmlentities(htmlspecialchars($_POST['rt']));
            }
            $this->Rt = $Rt;
    }

    function SetRw(){
        if(isset($_POST['rw'])){
            $Rw = htmlentities(htmlspecialchars($_POST['rw']));
        }
        $this->Rw = $Rw;
}

    function GetNik(){
        return $this->Nik;
    }
    function GetNama(){
        return $this->Nama;
    }
    function GetAlamat(){
        return $this->Alamat;
    }
    function GetKel(){
        return $this->Kel;
    }
    function GetJkl(){
        return $this->Jkl;
    }
    function GetPendidikan(){
        return $this->Pendidikan;
    }
    function GetUmur(){
        return $this->Umur;
    }
    function GetNotelp(){
        return $this->Notelp;
    }
   
    function GetPekerjaan(){
        return $this->Pekerjaan;
    }
    function GetRt(){
        return $this->Rt;
    }
    function GetRw(){
        return $this->Rw;
    }

    function GetCari(){
        return $this-Cari;
    }

    
    }

?>