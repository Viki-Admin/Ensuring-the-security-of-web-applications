<?php
include "db.php";

$login = $_POST['login'];
$pass = $_POST['password'];

$str = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'";
echo $str;
$run = mysqli_query($connect, $str);
$out = mysqli_fetch_array($run);

if ($out['role'] == 3) {
    $_SESSION['user'];
    header("Location:/home.php");
}
else {
    $_SESSION['admin'] = 1;
    header("Location:/admin.php");
}

?>