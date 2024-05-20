<?php
include "koneksi.php";
$email = $_POST['email'];
$password = md5($_POST['password']);


$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
$query = mysqli_query($con, $sql);
mysqli_close($con);

header("Location: /layout/login.php");
