<?php
    require_once "class/ClassMain.php";
    require_once "class/ClassLogin.php";

    $formlogin = new Main;
    $login = new Login;
    $formlogin->FormLogin();
    $login->Dologin();


?>