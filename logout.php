<?php
    session_start();
    unset($_SESSION["email"]);
    $_SESSION ["alert"] = "anda berhasil logout";
    header("location:login.php");
?>