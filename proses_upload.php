<?php
include 'connect.php';

if (isset($_POST['upload']))
{
    $id_request = $_POST['id_request'];
//    
//    $filename = $_FILES['myfile']['name'];
//    $destination = 'uploads/' . $filename;
//    $extension = pathinfo($filename, PATHINFO_EXTENSION);
//    $file = $_FILES['myfile']['tmp_name'];
//    $size = $_FILES['myfile']['size'];
//    
//    if (!in_array($extension, ['zip', 'pdf', 'png', 'jpg', 'docx', 'doc', 'xlsx', 'xls', 'jpeg']))
//        echo "Your file extension must be .zip, .pdf, .png, .jpg, .doc, .xlsx, .xls, .jpeg or .docx";
//    
//    else if ($_FILES['myfile']['size'] > 1000000)
//        echo "File is to large!!!";
//    
//    else
//    {
//        if (move_uploaded_file($file, $destination))
//        {
//            $sql = "INSERT INTO upload (id_file, nama_file, ukuran_file, id_request) VALUES (NULL, '$filename', '$size', '$id_request')";
//            
//            if (mysqli_query($db, $sql))
//                echo "File uploaded successfully";
//        }
//        
//        else
//            echo "Failed to upload file :(";
//    }
    
    $ekstensi_diperbolehkan = array('png', 'jpg', 'docx', 'doc', 'xlsx', 'xls', 'pdf', 'jpeg');
    $nama_file = $_FILES['file']['name'];
    $x = explode('.', $nama_file);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $destinasi = 'file_1/' . $nama_file;
            
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
    {
        if($ukuran < 25000000)
        {
            move_uploaded_file($file_tmp, $destinasi);
            $sql = "INSERT INTO upload (id_file, nama_file, ukuran_file, id_request) VALUE (NULL, '$nama_file', '$ukuran', '$id_request')";
            $query = mysqli_query($db, $sql);
                    
            if($query)
                header('Location: list_request.php?status=sukses');
                    
            else
                header('Location: list_request.php?status=gagal');
        }
                
        else
            echo "UKURAN FILE TERLALU BESAR";
    }
            
    else
        echo "FILE SELAIN INI TIDAK BISA";
}
        
?>