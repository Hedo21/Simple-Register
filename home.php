<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <section class="beranda">
            <h1 align="center">
                <?php
                    echo "Selamat Datang";
                ?>
            </h1>
            <table boerder="1" align="center">
                <tr>
                    <td>[<a href="in_dataBrg.php">Input Barang</a>]</td>
                    <td>[<a href="beli.php">Pembelian Barang</a>]</td>
                    <td>[<a href="hasil_in.php">Data Barang</a>]</td>
                    <td>[<a href="hasil_jual.php">Data Penjualan</a>]</td>
                    <td>[<a href="logout.php">Log Out</a>]</td>
                </tr>
            </table>
        </section>
    </body>
</html>