<?php
    session_start();
    $koneksi = mysqli_connect("localhost","root","","rumahsakitdrdea");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'")
    or die(mysqli_error($koneksi));

    if ($data=mysqli_fetch_array($query)){
        $_SESSION["email"]=$data["email"];
        $_SESSION["alert"]="Anda Berhasil Login";
        header("location:index.php");
    }else{
        $_SESSION["alert"]="Email/Password Salah";
        header("location:login.php");
    }
?>