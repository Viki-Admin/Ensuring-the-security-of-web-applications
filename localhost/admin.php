<?
include_once 'controllers/db.php';
if (!$_SESSION['user']) {
    $_SESSION['error']="проблема, ты не админ";
	header("Location:/home.php");

}
?>
<h1>Привет Админ!!!</h1>
<a href="controllers/exit.php"><h2>Выход</h2></a>