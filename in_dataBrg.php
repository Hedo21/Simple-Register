<!DOCTYPE html>
<html>
    <head>
        <title>Input Barang</title>
    </head>
    <body>
        <section>
            <form action="aksi_input.php?op=in" method="POST">
                <table align="center">
                    <h1 align="center">Input Barang</h1>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td> : </td>
                        <td><input type="text" name="nm"</td>
                    </tr>
                    <tr>
                        <td>Jumlah Barang</td>
                        <td> : </td>
                        <td><input type="text" name="jml"</td>
                    </tr>
                    <tr>
                        <td>Nama Admin</td>
                        <td> : </td> 
                        <td><select name="admin">
                                <?php
                                include 'koneksi.php';
                                $sql = "SELECT * FROM user";
                                $b = $koneksi->query($sql);
                                while ($c=$b->fetch_array()) { ?>
                                    <option value=<?php echo $c['id_user']?>><?php echo $c
                                        ['username']?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" value="Input">
                            <input type="reset" value="Reset">
                            <br>
                            [<a href="home.php">HOME</a>]     
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </body>
</html>