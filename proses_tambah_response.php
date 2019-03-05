<?php

include ("connect.php");

if (isset($_POST['daftar']))
{
    $id_request = $_POST['id_request'];
    $response = $_POST['response'];
    $status = $_POST['status'];
    
    $sql = "INSERT INTO response(id_response, response, tanggal_response, status, id_request) VALUE (NULL, '$response', now(), '$status', '$id_request')";
    
//    INSERT INTO `response` (`id_response`, `response`, `tanggal_response`, `status`) VALUES ('58', 'Pekerjaan telah selesai, PIC sudah meng-ACC Requestnya dan kembali ke SBU masing - masing', CURRENT_TIMESTAMP, 'Closed');
    $query = mysqli_query($db, $sql);
    
    if ($query)
        header('Location: daftar.html?status=sukses');
    
    else
        header('Location: daftar.html?status=gagal');
}

else
    die("Akses Dilarang...");

?>