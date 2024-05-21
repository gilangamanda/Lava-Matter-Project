<?php
include "koneksi.php";
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE email='$email'and password='$password'";
$login = mysqli_query($con, $sql);
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

if ($ketemu > 0) {
    session_start();
    $_SESSION['email'] = $r['email'];
    // $_SESSION['level'] = $r['level'];
    header("Location: /layout/index.php");
} else {
    echo "<center>Login gagal! email & password tidak benar<br>";
    echo "<a href=/layout/login.php><b>ULANGI LAGI</b></a></center>";
}

mysqli_close($con);
