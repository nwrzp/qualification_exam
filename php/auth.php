<?php

    $login = filter_var(trim($_POST['login']));
    $pass = filter_var(trim($_POST['pass']));

    $pass = md5($pass.'dsadsa');

    include('db.php');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();
    
    setcookie('id', $user['id'], time()+3600, '/');
    setcookie('login', $user['login'], time()+3600, '/');
    setcookie('role', $user['role'], time()+3600, '/');

    $mysql->close();
 
    header('Location: /');

?>