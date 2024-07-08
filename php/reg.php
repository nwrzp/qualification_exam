<?php


    $name = filter_var(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']));
    $login = filter_var(trim($_POST['login']));
    $pass = filter_var(trim($_POST['pass']));

    $pass = md5($pass.'dsadsa');

    include('db.php');

    $mysql->query("INSERT INTO `users` (`name`, `login`, `email`, `pass`, `role`) VALUES ('$name', '$login', '$email', '$pass', 1)");

    $mysql->close();

    header('Location: /');

?>