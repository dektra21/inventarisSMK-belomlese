<?php
if (empty($_SESSION['idAdmin'])){
    header("Location:index.php");
    exit;
}else{
require '../include/class/AdminClass.php';

$peminjaman = isset($_GET['peminjaman']) ? $_GET['peminjaman'] : NULL;

$pengembalian = isset($_GET['pengembalian']) ? $_GET['pengembalian'] : NULL;

$classAdmin = new AdminClass($pdo);
$adminId = $_SESSION['idAdmin'];

$dataAdmin = $classAdmin->dataloginAdmin($adminId);

$firstname = $dataAdmin->first_name;
$lastname = $dataAdmin->last_name;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/uikit.min.css" />
    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js"></script>
    <link rel="icon" href="logo.png">
    <title>Inventaris - Dashboard</title>
    <style>
        .padding {
            margin-left: 100px;
            margin-right: 100px;
        }

        .uk-card {
            border-radius: 10px;
        }

        .card1 {
            background-color: #D91313;
        }

        .card2 {
            background-color: #2966B6;
        }

        .card3 {
            background-color: #4FD076;
        }

        .card4 {
            background-color: #070707;
        }

        .card5 {
            background-color: #009B82;
        }

        .card6 {
            background-color: #830505;
        }

        .card7 {
            background-color: #918600;
        }

        .card8 {
            background-color: #05009A;
        }

        .card9 {
            background-color: #514F4F;
        }

        h2,
        h5,
        a,
        p {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="uk-animation-fade">
    <div id="flashdata" data-flashdata="<?= isset($_SESSION['loginadmin']) ?  $_SESSION['loginadmin'] : NULL?>"></div>
    <?php             
            require 'dashboard-navbar.php';
            require 'off-canvas.php'; 
    ?>
    <?php
         if ($peminjaman == 'data-peminjaman') {
            require 'data-peminjaman.php';
        }
        elseif ($pengembalian == 'data-pengembalian') {
            require 'data-pengembalian.php';
        } 
        else {
            require 'list-menu-admin.php';
        }
    ?>
    <script src="../assets/dist/sweetalert2.all.js"></script>
    <script>
        const flashdata = document.querySelector('#flashdata').dataset.flashdata;
        if (flashdata) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Login Berhasil, Hai Admin <?= $firstname . '
                ' . $lastname ?>'
            })
        }
    </script>
    <?php
        unset($_SESSION['loginadmin']);
?>
</body>

</html>