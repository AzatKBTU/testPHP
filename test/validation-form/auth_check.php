<?php 
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    $pass = md5($pass."gas4cs7fB1");

    $mysql = new mysqli('localhost','root','','register');
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if(($user) == null){
        echo 'Пользователь не найден!';
        exit();
    }
    setcookie('user', $user['name'], time()+3600*24, '/');
    

    $mysql->close();

    header('Location: /test/main.php');

?>