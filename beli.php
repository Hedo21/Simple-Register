<!DOCTYPE html>
<html>
    <head>
        <title>Pembelian</title>
    </head>
    <body>
        <section>
            <form   action="aksi_pembelian.php" method="POST">
                <table align="center">
                    <h1 align="center">PEMBELIAN BARANG</h1>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td> : </td>
                        <td>
                            <select name="barang">
                            <?php
                                include 'koneksi.php';
                                $sql = "SELECT * FROM barang";
                                $b = $koneksi->query($sql);
                                while ($c=$b->fetch_array()) { ?>
                                    <option value=<?php echo $c['id_barang']?>><?php echo
                                        $c['nm_barang']?></option>
                                    <?php
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Barang</td>
                        <td> : </td>
                        <td><input type="text" name="jml"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" value="INPUT">
                            <input type="reset" value="RESET">
                            <br>
                            [<a href="home.php">HOME</a>]
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </body>
</html>