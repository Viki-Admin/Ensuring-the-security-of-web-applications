<?
include 'controllers/db.php';
?>

<h3>Авторизация</h3>
<form method="POST" action="controllers/auth.php">
    <input type="text" name="login" placeholder="Логин:"><br>
    <input type="password" name="password" placeholder="Пароль:"><br>
    <input type="submit" name="sub_user" value="Войти">
</form>
<a href="avto.php">Впервые у нас?</a>

<?
echo $_SESSION['mess'];
unset($_SESSION['mess']);

echo $_SESSION['error'];
unset($_SESSION['error']);
?>