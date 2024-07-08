<?php


    
    setcookie('id', $user['id'], time()-3600, '/');
    setcookie('login', $user['login'], time()-3600, '/');
    setcookie('role', $user['role'], time()-3600, '/');
 
    header('Location: /');

?>