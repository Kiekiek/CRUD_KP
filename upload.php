<?php 
include("connect.php"); 

if (!isset($_GET['id_request']))
    header('Location: list_response.php');

$id_request = $_GET['id_request'];

$sql = "SELECT * FROM biodata WHERE id_request = $id_request";
$query = mysqli_query($db, $sql);

$request = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1)
    die("Data tidak ditemukan :(");
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Upload File</title>

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
                <h1>UPLOAD FILE</h1>
                <h3>Rifki Dwi Achsani Taqkwim</h3>
            </div>
        </div>

        <div class="padding">
            <div class="container">
                <header>
                    <h3>Upload File</h3>
                </header>

                <fieldset>
                    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_request" value="<?php echo $request['id_request'] ?>">

                        <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">

                            <br>

                            <input type="submit" value="Upload File" name="upload" class="btn btn-primary">

                        </div>
                        <table border="2" class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Request</th>
                                    <th>Request Dari</th>
                                    <th class="text-center">Tanggal Request</th>
                                    <th>Nama PIC</th>
                                    <th>Response</th>
                                    <th>Tanggal Response</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $sql = "SELECT * FROM biodata, response WHERE biodata.id_request = $id_request";
                                $query = mysqli_query($db, $sql);
                
                                while ($request = mysqli_fetch_array($query))
                                {
                                    echo "<tr>";
                        
                                    echo "<td class='align-middle text-center'>" . $request['id_request'] . "</td>";
                                    
                                    echo "<td class='align-middle'>" . $request['nama_request'] . "</td>";
                                    
                                    echo "<td class='align-middle'>" . $request['request_dari'] . "</td>";
                                    
                                    echo "<td class='align-middle text-center'>" . $request['tanggal_request'] . "</td>";
                                    
                                    echo "<td class='align-middle text-center'>" . $request['pic'] . "</td>";
                                    
                                    echo "<td class='align-middle'>" . $request['response'] . "</td>";
                        
                                    echo "<td class='align-middle'>" . $request['tanggal_response'] . "</td>";
                        
                                     echo "<td class='align-middle'>" . $request['status'] . "</td>";
                        
//                      echo "<a class='btn btn-info' href='cek_pic.php?id_request=" . $request['id_request'] . "'>ACC PIC</a>";
                        
//                        echo "<a href='tambah_respons.php?id_request=" . $request['id_request'] . "'>Tambah Response</a> | ";
                                }
                                ?>
                            </tbody>
                        </table>
                    </form>
                </fieldset>

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