<!DOCTYPE html>
<html>
    <head>
        <title>Form Login</title>
    </head>
    <body>
        <form action="aksi_login.php?op=in" method="POST">
            <table>
                <h2 style="margin-left: 100px;">LOG IN</h2>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
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
                    <td>
                        <input type="submit" name="submit" value="Log In">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
        <a href="form_register.php">Ayo buat akun. klik disini</a>
    </body>
</html>