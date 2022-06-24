<?php
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $pass1 = filter_var(trim($_POST['pass1']),FILTER_SANITIZE_STRING);
    $pass2 = filter_var(trim($_POST['pass2']),FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost','root','','register');
    $sqlEmail = "SELECT COUNT(`ID`) FROM `users` WHERE email = '$email'";
    $result = $mysql->query($sqlEmail);
    foreach($result as $key=>$val) {
        $cnt = $val["COUNT(`ID`)"];
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Некорректная почта';
        exit();
    }elseif($cnt != 0){
        echo 'Такая почта уже существует';
        exit();
    }elseif($pass1 != $pass2){
        echo 'Пароли не совпадают';
        exit();
    }
    
    $pass = md5($pass1."gas4cs7fB1");


    $mysql->query("INSERT INTO `users` (`name`, `email`, `pass`) VALUES('$name', '$email', '$pass')");


    $mysql->close();

    header('Location: /test/auth.php');
?>