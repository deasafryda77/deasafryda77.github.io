<?php
session_start();
include 'koneksi.php';
$koneksi = mysqli_connect("localhost","root","","rumahsakitdrdea");
$idpasien=$_POST['idpasien'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$notlp=$_POST['notlp'];
$alamat=$_POST['alamat'];
$diagnosa=$_POST['diagnosa'];

$query = mysqli_query ($koneksi, "INSERT INTO pasien(idpasien,nama,jk,notlp,alamat,diagnosa) VALUES ('$idpasien','$nama','$jk','$notlp','$alamat','$diagnosa')")
or die (mysqli_error($koneksi));

if($query){
    header("location:pasien.php");
} else{
    echo "Gagal Input Data";
}
?>