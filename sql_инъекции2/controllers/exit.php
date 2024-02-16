<?
include 'db.php';

session_unset();
header("Location:../index.php");
echo"Вы вышли";
?>