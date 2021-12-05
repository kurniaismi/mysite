<?php
session_start();
if( !isset($_SESSION['log']) ){
    header('location: login.php');
    exit;
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <h1>Halaman Admin</h1><br>
    <a href="logout.php" class="btn btn-info" onclick="return confirm('Apakah Anda ingin logout?')">LogOut</a>

</body>
</html>