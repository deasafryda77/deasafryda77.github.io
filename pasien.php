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
    <title>Tampilan Data Rumah Sakit Dr.Dea Safryda</title>
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
        table
        {
            border-color:white;
        }
	  </style>
</head>
<body>
    <div class="container"><br><br>
    <h1>Data Pasien</h1>
    <p><a href="tambah.php" class="btn btn-primary btn-lg">Tambah Data</a>
    <a href="index.php" class="btn btn-danger btn-lg">Kembali</a></p>
    <table bgcolor="grey" border="2">
        <thead align=center>
            <th>ID Pasien</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Diagnosa</th>
            <th>Aksi</th>
        </thead>
        <tbody>
        <?php
        include 'koneksi.php';
        $koneksi = mysqli_connect("localhost","root","","rumahsakitdrdea");
        $data = mysqli_query($koneksi, "SELECT * FROM pasien") or die(mysqli_error($koneksi));
        foreach($data as $baris){ ?>
        <tr>
            <td width=100px align=center><?php echo $baris['idpasien']?></td>
            <td width=200px align=center><?php echo $baris['nama']?></td>
            <td width=150px align=center><?php echo $baris['jk']?></td>
            <td width=150px align=center><?php echo $baris['notlp']?></td>
            <td width=300px heigh=100px align=center><?php echo $baris['alamat']?></td>
            <td width= 100px align=center><?php echo $baris['diagnosa']?></td>
            <td width= 100px height= 100px align=center>
                <p><br><a href ="update.php?idpasien=<?php echo $baris['idpasien']?>" class="btn btn-success">Update</a></p>
                <p><a href ="delete.php?idpasien=<?php echo $baris['idpasien']?>"class="btn btn-danger">Delete</a></p>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>