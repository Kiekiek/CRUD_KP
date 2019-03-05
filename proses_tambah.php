<?php

include ("connect.php");

if (isset($_POST['daftar']))
{
    $nama = $_POST['nama'];
    $request_dari = $_POST['request_dari'];
    $nama_pic = $_POST['nama_pic'];

    $sql = "INSERT INTO biodata(nama_request, request_dari, tanggal_request, pic) VALUE ('$nama', '$request_dari', now(), '$nama_pic')";
    $query = mysqli_query($db, $sql);
    
    if ($query)
        header('Location: index.html?status=sukses');
    
    else
        header('Location: index.html?status=gagal');
}

else
    die("Akses Dilarang...");

?>