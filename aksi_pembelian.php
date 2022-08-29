<?php
    include 'koneksi.php';
    $barang = $_POST['barang'];
    $jml = $_POST['jml'];

    $sql = "INSERT INTO tambah_barang (id_barang, jumlah) values
            ('".$barang."' , '".$jml."')";
    $a=$koneksi->query($sql);
    if ($a == true){
        header('location:hasil_in.php');
    } else {
        echo "erooorrrr";
    }
?>