<?php
session_start();
include 'koneksi.php';
$idpasien=$_GET['idpasien'];
$koneksi = mysqli_connect("localhost","root","","rumahsakitdrdea");
$query=mysqli_query($koneksi, "DELETE FROM pasien where idpasien='$idpasien'")
or die (mysqli_error($koneksi));

if (query){
    header("Location: pasien.php");
}else{
    echo "Gagal Hapus Data";
}
?>