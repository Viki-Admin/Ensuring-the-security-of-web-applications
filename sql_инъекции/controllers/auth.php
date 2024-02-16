<?
include 'db.php';

// Получение значений из POST-запроса
$login = $_POST['login'];
$password = $_POST['password'];

// Подключение к базе данных
$mysqli = new mysqli("localhost", "root", "", "user");

// Подготовленное выражение для безопасной авторизации
$stmt = $mysqli->prepare("SELECT id, login, password FROM users WHERE login = ? AND password = ?");
$stmt->bind_param("ss", $login, $password);
$stmt->execute();
$result = $stmt->get_result();

// Проверка, есть ли пользователь с указанным логином и паролем
if ($row = $result->fetch_assoc()) {
    // Пользователь успешно авторизован
    $_SESSION['mess'] = "Добро пожаловать, " . $row['login'] . "!";
    header("Location:../home.php");
} else {
    // Неправильные учетные данные
    $_SESSION['error'] = "Ошибка: Неправильный логин или пароль";
    header("Location:../index.php");
}

// Закрытие соединения
$stmt->close();
$mysqli->close();
?>

// $login=$_POST['login'];
// if(preg_match_all("/[(?\/\'\;\:\-\)]/i",$_POST['login']))
// {
//     echo"Ошибка!!!";
// }
// else
// {

// $password=$_POST['password'];

// $user="SELECT * FROM `users` WHERE login = '$login' AND password = $password";
// $str_user=mysqli_query($connect, $user);
// $run=mysqli_fetch_array($str_user);
// $count=mysqli_num_rows($str_user);

// if($login && $password)
// {
//     if(count($run)!=0)
//     {
//         $_SESSION['users']=array
//         (
//             'id'=>['id'],
//             'login'=>['login']
//         );
//         header("Location:../home.php");
//     }else{
//         echo"Учетные данные не верны!!!";
//         header("Location:../index.php");
//     }
// }else{
//     echo"Заполните все поля!!!";
//     header("Location:../index.php");
// }
// }
?>
