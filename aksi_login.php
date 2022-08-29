<?php
session_start();
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

        $sql = "SELECT * from user where username = '$username'
            and password = '$password'";
        $query = mysqli_query($koneksi,$sql);
        if (mysqli_num_rows($query)==1) {
            $data = $query->fetch_array();
            if($data['level']=="Admin"){
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Admin";
                header('location:home.php');  
            } else if ($data['level']=="Pelanggan"){
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Pelanggan";
                header('location:form_penjualan.php'); 
            } else {
            }
        }
?>    
