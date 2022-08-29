<?php
    include 'koneksi.php';
    $pelanggan = $_POST['pelanggan'];
    $barang = $_POST['barang'];
    $jml = $_POST['jml'];

    $sql = "INSERT INTO jual (id_user, id_barang, jumlah) values
            ('".$pelanggan."' , '".$barang."' , '".$jml."')";
    $a = $koneksi->query($sql);
    if ($a == true){
        header('location:hasil_jual.php');
    } else {
        echo "eroorrrrr";
    }
?>