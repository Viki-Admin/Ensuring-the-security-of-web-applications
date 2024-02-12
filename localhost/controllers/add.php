<?
include 'db.php';

$login = $_POST['login'];
$password = $_POST['password'];
$sub_user= $_POST['sub_user'];

$str_user="INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password')";

if ($sub_user) {
    if ($login && $password ) {
        $run_add_user = mysqli_query($connect, $str_user);
            $_SESSION['mess'] = "<font color=green>Пользователь добавлен!</font>";
            header("location: ../index.php");
    } else {
        $_SESSION['error'] = "<font color=red>Заполните все поля!</font>";
    }
    header("location: ../index.php");
}
?>