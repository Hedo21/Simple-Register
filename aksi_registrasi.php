<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $sql = "INSERT INTO user (username,password,level) values 
        ('".$username."' , '".$password."' , '".$level."')";
    $a=$koneksi->query($sql);
    if ($a == true){
        header('location: form_login.php');
    } else {
        echo "error";
    }
?>