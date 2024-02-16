<?
include 'controllers/db.php';

$_SESSION['mess'] ;
unset($_SESSION['mess'] );

$_SESSION['error'] ;
unset($_SESSION['error'] );
?>
<h3>Войти</h3>
<form method="POST" action="controllers/auth.php">
    <input type="text" name="login" placeholder="Логин:"><br>
    <input type="password" name="password" placeholder="Пароль:"><br>
    <input type="submit" value="Войти">
</form>