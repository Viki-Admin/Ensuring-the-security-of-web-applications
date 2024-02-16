<?
include 'db.php';

$login=$_POST['login'];
$password=$_POST['password'];

$user="SELECT * FROM `user` WHERE login = '$login' AND password = $password";
$str_user=mysqli_query($connect, $user);
$run=mysqli_fetch_array($str_user);
$count=mysqli_num_rows($str_user);

if($login && $password)
{
    if(count($run)!=0)
    {
        $_SESSION['users']=array
        (
            'id'=>['id'],
            'login'=>['login']
        );
        header("Location:../home.php");
    }else{
        echo"Учетные данные не верны!!!";
        header("Location:../index.php");
    }
}else{
    echo"Заполните все поля!!!";
    header("Location:../index.php");
}

?>

<!-- DROP DATABASE USERS -->