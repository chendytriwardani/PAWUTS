<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_041" ;
    $koneksi = mysqli_connect($server,$user,$pass,$db);
   
    
    $nama = $_POST['nama_chendy'];
    $email = $_POST['email_chendy'];
    $alamat = $_POST['alamat_chendy'];

    $query = "INSERT INTO tbl_chendy VALUES (null, '$nama', '$email', '$alamat')";

    $hasil = mysqli_query($koneksi,$query);

    if($hasil){
        header ('Location:index.php');
    }else{
        echo "input data gagal";
    }
?>