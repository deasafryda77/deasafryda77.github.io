<?php
    session_start();
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rumah Sakit Dr.Dea Safryda</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        RS. Dr.Dea Safryda
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="pasien.php">Pasien</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Administrasi Kelola Data Pasien</h1>
                        <p>Selamat datang dilaman Kelola Data Pasien RS. Dr. Dea Safryda!</p>
                        <p>Web ini hanya digunakan untuk pengelolaan data pasien oleh Admin yang bertanggung jawab pada bagian tersebut.<br>Admin diharapkan mematuhi aturan kerahasiaan data pasien yang telah ditetapkan oleh pihak RS. Dr. Dea Safryda.</p>
                        <p>Data pasien tidak untuk disebarluaskan, dimanipulasi maupun diperdagangkan tanpa perizinan pihak RS. Dr. Dea Safryda.<br>Pelanggar dikenakan sanksi sesuai aturan hukum yang berlaku diRS. Dr. Dea Safryda.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menubar Kontrol</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>