<?
include 'controllers/db.php';
?>


<h3>Регистрация</h3>
<form method="POST" action="controllers/add.php">
    <input type="text" name="login" placeholder="Логин:"><br>
    <input type="password" name="password" placeholder="Пароль:"><br>
    <input type="submit" name="sub_user" value="Зарегистрироваться">
</form>
<a href="index.php">Хотите войти?</a>

<?
echo $_SESSION['mess'];
unset($_SESSION['mess']);

echo $_SESSION['error'];
unset($_SESSION['error']);
?>