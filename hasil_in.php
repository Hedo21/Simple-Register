<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Input Barang</title>
    </head>
    <body>
        <section>
            <table border="1" align="center">
                <h1 align="center">LIST BARANG</h1>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Admin</th>
                        <th>Nama Barang</th>
                        <th>Stock Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        include 'koneksi.php';
                        $sql = "SELECT * FROM user, barang WHERE user.id_user = barang.id_user";
                        $b = $koneksi->query($sql);
                        while ($c=$b->fetch_array()) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $c['username']; ?></td>
                                <td><?php echo $c['nm_barang']; ?></td>
                                <td><?php echo $c['jumlah_barang']; ?></td>
                            </tr>
                            <?php
                        }
                    ?>
                    <table align="center">
                        <tr>
                            <td>[<a href="in_dataBrg.php">Input Barang</a>]</td>
                            <td>[<a href="beli.php">Pembelian</a>]</td>
                            <td>[<a href="home.php">HOME</a>]</td>
                        </tr>
                    </table>
                </tbody>
            </table>
        </section>
    </body>
</html>