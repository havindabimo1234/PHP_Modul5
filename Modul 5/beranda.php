<?php
session_start();
include ("function.php");
echo check_login();
?>

<!DOCTYPE html>
<html>
<head><title>praktik login session</title></head>
<body>
<h1>Selamat datang!</h1>
<h3><a href="profil.php">Edit profil</a></h3>
<h3><a href="beranda.php">Logout</a></h3>
</body>
</html>