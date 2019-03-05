<?php

session_start();

include("connect.php");

if (isset($_GET['id_request']))
{
    $id_request = $_GET['id_request'];
    
    $sql = "DELETE FROM biodata WHERE biodata.id_request = $id_request";
    $query = mysqli_query($db, $sql);
    
    if ($query)
    {
        $_SESSION['message'] = "Data telah terhapus";
        $_SESSION['msg_type'] = "danger";
        
        header('Location: list_request.php');
    }
    
    else
        die("Akses Dilarang");
}

?>