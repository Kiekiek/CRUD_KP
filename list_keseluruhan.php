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
                <h1>DAFTAR KESELURUHAN</h1>
                <h3>Rifki Dwi Achsani Taqkwim</h3>
            </div>
        </div>

        <div class="padding">
            <div class="container">
                <header>
                    <h3>List Keseluruhan</h3>
                </header>

                <br>

                <table border="2" class="table table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th class="align-middle">No</th>
                            <th class="align-middle">Request</th>
                            <th>Request Dari</th>
                            <th>Nama PIC</th>
                            <th>Tanggal Request</th>
                            <th class="align-middle">Response</th>
                            <th class="align-middle">Tanggal Response</th>
                            <th class="align-middle">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
//                    $sql = "SELECT * FROM biodata, response WHERE biodata.id_request = response.id_response  ORDER BY biodata.id_request ASC";
//                        $sql = "SELECT * FROM semua ORDER BY semua.id_request ASC";
                        $sql = "SELECT A.*, (SELECT COUNT(request_dari) FROM semua WHERE request_dari = A.request_dari) AS jumlah FROM semua A ORDER BY A.request_dari";
                        
                        $no = 1;
                        $jumlah = 1;
                    
                    $query = mysqli_query($db, $sql);
                
                    while ($request = mysqli_fetch_array($query))
                    {
//                        $sql_2 = "SELECT tanggal_request, pic, response, tanggal_response, status FROM semua WHERE id_request = " . $request['id_request'] . "AND nama_request = " . $request['nama_request'];
//                        
//                        $query_2 = mysqli_query($db, sql_2);
//                        
//                        $total = mysqli_num_rows($query_2);
//                        
                        echo "<tr>";
                        
                        if ($jumlah <= 1)
                        {
                            echo "<td class='align-middle' rowspan=" . $request['jumlah'] . ">" . $no . "</td>";
                            
                            echo "<td class='align-middle' rowspan=" . $request['jumlah'] . ">" . $request['nama_request'] . "</td>";
                            
                            echo "<td class='align-middle' rowspan=" . $request['jumlah'] . ">" . $request['request_dari'] . "</td>";
                            
                            echo "<td class='align-middle' rowspan=" . $request['jumlah'] . ">" . $request['pic'] . "</td>";
                            
                            echo "<td class='align-middle' rowspan=" . $request['jumlah'] . ">" . $request['tanggal_request'] . "</td>";
                        
                            $jumlah = $request['jumlah'];
                            $no++;
                        }
                        
                        else
                            $jumlah = $jumlah - 1;
                        
                        echo "<td class='align-middle'>" . $request['response'] . "</td>";
                        
                        echo "<td class='align-middle'>" . $request['tanggal_response'] . "</td>";
                        
                        echo "<td class='align-middle'>" . $request['status'] . "</td>";
                    }
                        
//                        echo "<input type='file' class='form-control-file align-middle' id='exampleFormControlFile1' name='file'>";
                        
//                        echo "<input type='submit' class='form-control-file align-middle' id='exampleFormControlFile1' name='upload' value='Upload'>";
                    
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