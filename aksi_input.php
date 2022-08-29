<?php
    include 'koneksi.php';
    $nm = $_POST['nm'];
    $jml = $_POST['jml'];
    $admin = $_POST['admin'];

    $sql = "INSERT INTO barang (nm_barang, jumlah_barang, id_user) values
        ('".$nm."' , '".$jml."' , '".$admin."')";
    $a=$koneksi->query($sql);
    if ($a == true){
        header('location:hasil_in.php');
    } else {
        echo "erorrrrrr";
    }