<?php
    session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style type="text/css">
		body
		{
			background-color:black;
		}
        .container
        {
            color:white;
        }
    </style>
</head>
<body>
    <div class="container"><br><br>
    <h1>Update Data Mahasiswa</h1><br>
    <?php
        include 'koneksi.php';
        $koneksi = mysqli_connect("localhost","root","","rumahsakitdrdea");
        $idpasien=$_GET['idpasien'];
        $data = mysqli_query ($koneksi, "SELECT * FROM pasien WHERE idpasien='$idpasien'") or die (mysqli_error($koneksi));
        $baris = mysqli_fetch_array ($data);
    ?>
    <div class="col-md-6">
    <form action="prosesupdate.php" method="post">
        <label for="idpasien">ID Pasien</label>
        <input type="text" class="form-control" name="idpasien"><br>
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama"><br>
        <label for="jk">Jenis Kelamin</label>
        <input type="text" class="form-control" name="jk"><br>
        <label for="notlp">Nomor Telepon</label>
        <input type="number" class="form-control" name="notlp"><br>
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat"><br>
        <label for="diagnosa">Diagnosa</label>
        <input type="text" class="form-control" name="diagnosa">
        <button class="btn btn-primary mt-3" type="submit" name="button">Simpan Data</button>
        <a href ="pasien.php" class="btn btn-danger mt-3">Kembali</a><br><br>
    </form>
    </div>
    </div>
</body>
</html>