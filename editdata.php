<?php
    include 'koneksi.php';
    
    $id = $_POST['id_chendy'];
    $nama = $_POST['nama_chendy'];
    $email = $_POST['email_chendy'];
    $alamat = $_POST['alamat_chendy'];

    $query = "UPDATE tbl_chendy SET id_chendy='$id', nama_chendy='$nama',email_chendy='$email', alamat_chendy='$alamat' WHERE id_chendy='$id'";

    $hasil = mysqli_query($koneksi,$query);

    if($hasil){
        header('location:index.php');
    }else{
        echo "GAGAL";
    }
?>