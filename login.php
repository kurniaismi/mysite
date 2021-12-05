<?php
if (isset($_POST['login'])) {
    require "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $row = mysqli_num_rows($cekuser);

    if ($row === 1) {
        //jalankan prosedur seleksi password
        $fetch_pass = mysqli_fetch_assoc($cekuser);
        $cekpass = $fetch_pass['password'];
        if ($cekpass <> $password) {
            echo "<script>alert('Password salah'); document.location.href='login.html'</script>";
        } else {
            $_SESSION['log'] = true;
            echo "<script>alert('Login Berhasil'); document.location.href='INDEX.html'</script>";
        }
    } else {
        echo "<script>alert('Username salah atau belum terdaftar'); document.location.href='login.html'</script>";
    }
}
