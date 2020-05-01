<?php
    require '../Connection.php';
    require '../class/UsersClass.php';
    
    $classUsers = new UsersClass($pdo);
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $classUsers->login($username, $password);
    if ($login) {
        header("Location:../../user/index.php?page=dashboard");
        $_SESSION['loginuser'] = $login;
    }
    else {
        header("Location:../../user/index.php");
    }
?>