<?php
    session_start();
    require '../connection.php';
    require '../class/Adminclass.php';
    
    $classAdmin = new AdminClass($pdo);
    
    $usernameAdmin = $_POST['usernameadmin'];
    $passwordAdmin = $_POST['passwordadmin'];

    $loginAdmin = $classAdmin->loginbyAdmin($usernameAdmin, $passwordAdmin);
    if ($loginAdmin) {
        header("Location:../../admin/dashboard.php");
    }
    else {
        // header("Location:../../admin/index.php");
        echo $loginAdmin;
    }
?>