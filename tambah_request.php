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
                <h1>FORM REQUEST</h1>
                <h3>Rifki Dwi Achsani Taqkwim</h3>
            </div>
        </div>

        <div class="padding">
            <div class="container">
                <header>
                    <h3>Form Pendaftaran Request</h3>
                    <br>
                </header>

                <form action="proses_tambah.php" method="post">

                    <fieldset>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                Nama Request
                            </span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nama" placeholder="Apa Keluhan Anda?">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                Request Dari
                            </span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="request_dari" placeholder="Dari Siapa Request nya?">
                        </div>
                        
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                Nama PIC
                            </span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nama_pic" placeholder="Masukkan Nama PIC">
                        </div>

                        <p>
                            <input type="submit" value="Daftar" name="daftar" class="btn btn-primary">

<!--                            <a href="index.php" class="btn btn-primary">Kembali ke Menu Awal</a>-->

                        </p>

                    </fieldset>
                </form>
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