<link rel="stylesheet" href="css.css">
<div>
<table width="500" align="center" cellpadding="4" cellspacing="4">
    <?php
        if (empty($_POST['nama'])) {
            header("Location:kosong.php");
        } else {
            echo "Nama &ensp;:".$_POST['nama']."<br><br>";
        }
        if (empty($_POST['email'])) {
            header("Location:kosong.php");
        } else {
            echo "Email &ensp;:".$_POST['email']."<br><br>";
        }
        if (empty($_POST['waktu'])) {
            header("Location:kosong.php");
        } else {
            echo "Waktu &nbsp;:".$_POST['waktu']."<br><br>";
        }
    ?>
</table>
</div>