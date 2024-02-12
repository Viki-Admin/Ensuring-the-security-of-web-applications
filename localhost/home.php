<?
include_once 'controllers/db.php';
?>

<h1>Добро пожаловать</h1>
<a href="controllers/exit.php"><h2>Выход</h2></a>


<?
echo $_SESSION['mess'];
unset($_SESSION['mess']);

echo $_SESSION['error'];
unset($_SESSION['error']);
?>