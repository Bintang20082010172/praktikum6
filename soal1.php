<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Login</title>
</head>
<body>
<form method="POST" action="hasilkirim.php">
<div>
    <table width="500" align="center" cellpadding="4" cellspacing="4">
        <tr>
            <td width="150">Nama</td>
                <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td width="150">Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td width="150">Waktu</td>
            <td><input type="date" name="waktu" value="<?php echo date("m-F-Y, g:i:s a"); ?>">></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="btnLogin" value="Kirim">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>
    </table>
</div>    
</form>
</body>
</html>