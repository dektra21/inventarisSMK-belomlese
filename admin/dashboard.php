<?php
require 'tampilan-data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/uikit.min.css" />
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
    <link rel="icon" href="logo.png">
    <title>Inventaris - Dashboard</title>
    <style>
        .padding {
            margin-left: 100px;
            margin-right: 100px;
        }
        .uk-card{
            border-radius:10px;
        }
        .card1 {
            background-color: #D91313;
        }
        .card2{
            background-color: #2966B6;
        }
        .card3{
            background-color: #4FD076;
        }
        .card4{
            background-color: #070707;
        }
        .card5{
            background-color: #009B82;
        }
        .card6{
            background-color: #830505;
        }
        .card7{
            background-color: #918600;
        }
        .card8{
            background-color: #05009A;
        }
        .card9{
            background-color: #514F4F;
        }
        h2, h5, a, p{
            font-family:'Poppins', sans-serif;
        }
        .tambah:hover{
            border-radius:100px;
            margin:10px;
            background-color:lightgrey;
            transition:1s;
        }
        .info:hover{
            border-radius:100px;
            padding:10px;
            background-color:lightgrey;
            transition:1s;
        }
    </style>
</head>

<body class="uk-animation-fade">
<div id="flashdata1" data-flashdata="<?= isset($_SESSION['loginuser']) ? $_SESSION['loginuser'] : NULL?>"></div>
    <?php
        require 'dashboard-navbar.php';
    ?>
    <?php
        require 'list-menu-admin.php';
    ?>
    <?php
        require 'off-canvas.php';
    ?>
</body>
</html>