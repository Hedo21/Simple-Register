<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <table>
            <form action="aksi_registrasi.php" method="POST">
                <h2>REGISTRASI</h2>
                <tr>
                    <td>Username</td>
                    <td> : </td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> : </td>
                    <td><input type="Password" name="password" required></td>
                </tr>
                <tr>
                    <td>Ulangi Password</td>
                    <td> : </td>
                    <td><input type="Password" name="cekpassword" required></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td> : </td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> : </td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td> : </td>
                    <td>
                        <select name="level">
                            <option value="Admin">Admin</option>
                            <option value="Pelanggan">Pelanggan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>