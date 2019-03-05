<?php include("connect.php"); ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Form Pendaftaran Request</title>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-gray">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/Logo%20ICON+.png" id="icon-plus">
                </a>
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="home">
            <div class="landing-text">
                <br>
                <br>
                <h1>DAFTAR REQUEST</h1>
                <h3>Rifki Dwi Achsani Taqkwim</h3>
            </div>
        </div>

        <?php
        
        if (isset($_SESSION['message'])): ?>
        
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
            
        </div>
        
        <?php endif ?>
        
        <div class="padding">
            <div class="container">
                <header>
                    <h3>Daftar Request</h3>
                    <br>
                </header>

                <table border="2" class="table table-hover table-sm">
                    <thead>
                        <tr>
                            <th class="align-middle text-center">No</th>
                            <th class="align-middle text-center">Request</th>
                            <th class="align-middle text-center">Request Dari</th>
                            <th class="align-middle text-center">Tanggal Request</th>
                            <th class="align-middle text-center">File Upload</th>
                            <th class="align-middle text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                    $sql = "SELECT * FROM biodata";
                    $query = mysqli_query($db, $sql);
                
                    while ($request = mysqli_fetch_array($query))
                    {
                        echo "<tr>";
                        
                        echo "<td class='align-middle text-center'>" . $request['id_request'] . "</td>";
                        
                        echo "<td class='align-middle'>" . $request['nama_request'] . "</td>";
                        
                        echo "<td class='align-middle'>" . $request['request_dari'] . "</td>";
                        
                        echo "<td class='align-middle text-center'>" . $request['tanggal_request'] . "</td>";
                        
                        echo "<td>";
                        
                        echo "<a class='btn btn-info' href='upload.php?id_request=" . $request['id_request'] . "'>File Upload</a>";
                        
                        echo "<td>";
                        
                        echo "<a class='btn btn-danger' href='hapus.php?id_request=" . $request['id_request'] . "'>Hapus</a>";
                        
                        
//                      echo "<a class='btn btn-info' href='cek_pic.php?id_request=" . $request['id_request'] . "'>ACC PIC</a>";
                        
//                        echo "<a href='tambah_respons.php?id_request=" . $request['id_request'] . "'>Tambah Response</a> | ";
                    }
                ?>
                    </tbody>

                </table>
<!--                <a href="index.php" class="btn btn-primary">Kembali ke Menu Awal</a>-->
                <!--
        
        <p>
            <a href="tambah_respons.php">Masukkan Respons</a>
        </p>
        
-->
            </div>
        </div>

        <footer class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Contact Us</h3>
                    <br>
                    <h4>Our address and contact info here</h4>
                </div>

                <div class="col-sm-4">
                    <h3>Connect</h3>
                    <a href="#" class="fa fa-facebook fa-2x"></a>
                    <a href="#" class="fa fa-twitter fa-2x"></a>
                    <a href="#" class="fa fa-google fa-2x"></a>
                    <a href="#" class="fa fa-linkedin fa-2x"></a>
                    <a href="#" class="fa fa-youtube fa-2x"></a>
                </div>

                <div class="col-sm-4">
                    <img src="img/b.png" class="img-fluid">
                </div>
            </div>
        </footer>
    </body>

    </html>