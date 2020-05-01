<?php
    session_start();
    require '../Connection.php';
    require '../class/Adminclass.php';
    
    $classAdmin = new AdminClass($pdo);
    
    $usernameAdmin = $_POST['usernameadmin'];
    $passwordAdmin = $_POST['passwordadmin'];

    $loginAdmin = $classAdmin->loginbyAdmin($usernameAdmin, $passwordAdmin);
    if ($loginAdmin) {
        header("Location:../../admin/index.php?page=dashboard");
        $_SESSION['loginadmin'] = $loginAdmin;
    }
    else {
        echo "
        <script>
            alert('Data Gagal');
            document.location.href = '../../admin/index.php';
        </script>
    ";
    }
?>