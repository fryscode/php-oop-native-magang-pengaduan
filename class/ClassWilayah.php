<?php
    class Wilayah{
        var $IdKec,$NamaWil,$IdKel,$Nama,$Cari;
        function SetIdKec(){
            if(isset($_POST['idkec'])){
                $IdKec = $_POST['idkec'];
            }
            else if(isset($_GET['key'])){
                $IdKec = $_GET['key'];
            }
            else{
                $IdKec = '';
            }
        
            $this->IdKec = $IdKec;
        }
        function SetNamaWil(){
            if(isset($_POST['kec'])){
                $NamaWil = $_POST['kec'];
            }
            $this->NamaWil = $NamaWil;
        }
        function SetIdKel(){
            if(isset($_POST['idkel'])){
                $IdKel = $_POST['idkel'];
            }
            $this->IdKel = $IdKel;
        }
        function SetNama(){
            if(isset($_POST['kel'])){
                $Nama = $_POST['kel'];
            }
            $this->Nama = $Nama;
        }

        function SetCari(){
            if(isset($_GET['cari'])){
                $Cari = $_GET['cari'];
            }
            $this->Cari = $Cari;
        }

        function GetIdKec(){
            return $this->IdKec;
        }
        function GetNamaWil(){
            return $this->NamaWil;
        }
        function GetIdKel(){
            return $this->IdKel;
        }
        function GetNama(){
            return $this->Nama;
        }
        function GetCari(){
            return $this->Cari;
        }
    }
?>