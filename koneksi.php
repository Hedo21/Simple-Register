<html>
    <head>
        <title>Koneksi Database</title>
    </head>
    <body>
        <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "produksi";
            $koneksi = mysqli_connect($host,$username,$password,$database);
        ?>
    </body>
<html>