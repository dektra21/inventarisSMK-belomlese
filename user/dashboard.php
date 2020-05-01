<?php
if (empty($_SESSION['id'])){
    header("Location:index.php");
    exit;
}else{
require '../include/class/UsersClass.php';
require '../include/class/BarangClass.php';

$userid = $_SESSION['id'];

$UsersClass = new UsersClass($pdo);
$userdata = $UsersClass->loginUser($userid);
$firstname = $userdata->first_name;
$lastname = $userdata->last_name;

$BarangClass = new BarangClass($pdo);
$barangBaru = $BarangClass->barangBaru();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/uikit.min.css" />
    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js"></script>
    <link rel="icon" href="../assets/cover/logo.png">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bangers|Bitter|Bowlby+One+SC|Indie+Flower|Poppins&display=swap"
        rel="stylesheet">
    <title>Inventaris - Dashboard</title>
    <style>
        .uk-card-primary {
            background: #00BFFF;
        }

        .uk-logo {
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .uk-logo:hover {
            color: white;
        }

        .uk-navbar-right {
            padding-right: 50px;
        }

        .uk-active {
            color: white;
            font-size: 20px;
        }

        .uk-active:hover {
            color: black;
            text-decoration: none;
            transition: 0.20s;

        }

        .uk-open::before {
            opacity: 2;
        }

        .info:hover {
            border-radius: 100px;
            padding: 9px;
            background-color: #1E90FF;
            transition: 0.5s;
        }
    </style>
</head>

<body class="uk-animation-fade">
<div id="flashdata" data-flashdata="<?= isset($_SESSION['loginuser']) ?  $_SESSION['loginuser'] : NULL?>"></div>
    <nav class="uk-navbar-container" uk-navbar style="background:#39f;" style=" z-index: 980;"
        uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
        <div class="uk-navbar-left uk-margin-left" style=" margin-bottom:-8px; margin-top:-8px;">

            <b> <a href="" class="uk-visible@m uk-hidden@s" uk-toggle="target: #offcanvas-reveal"
                    uk-icon="icon: menu; ratio: 1.5;" style="margin-left:10px; color:white;"> </a></b>
            <img class="uk-preserve-width uk-border-circle uk-visible@m" style="margin-right: 10px;"
                src="../assets/cover/logo.png" width="40" alt="">
            <span class="uk-navbar-item uk-logo uk-visible@m"
                style="font-family: 'Poppins', sans-serif; font-size:30px;">
                Inventaris SMK
            </span>

        </div>
        <div class="uk-navbar-right uk-visible@m" style="margin-right: 50px;">
            <div class="uk-inline info" style="padding:10px;">
                <a href="" style="text-decoration: none; color: black; "> <img
                        class="uk-preserve-width uk-border-circle" style="margin-right: 10px; border:1px solid black;"
                        src="../assets/cover/dektra.jpg" width="50" alt="">

                    <span style="font-family:'Poppins', sans-serif; color:white;">
                        <b><?= $firstname . ' ' . $lastname ?></b> </span></a>
            </div>

            <div uk-dropdown="pos: bottom-justify" style="border-radius:10px;" class="">
                <a href="logout.php" style="text-decoration:none; color: black;">
                    <span uk-icon="icon: sign-out;"></span>
                    Keluar
                </a>
            </div>
        </div>
    </nav>



    <nav class="uk-navbar-container uk-hidden@s" uk-navbar style="background:#39f;" style=" z-index: 980;"
        uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
        <div class="uk-navbar-left uk-margin-left" style="margin-bottom:-10px;">


            <a href="" uk-toggle="target: #offcanvas-reveal" uk-icon="icon: menu; ratio: 1.3;"
                style="margin-left:0px; color:white; margin-top:-10px;"></a>

            <span class="uk-navbar-item uk-logo "
                style="font-family: 'Poppins', sans-serif; font-size:23px; margin-top:-10px;">
                Inventaris SMK
            </span>


        </div>
    </nav>

    <h2 class="uk-heading-bullet uk-visible@m"
        style="padding-left:70px; margin-bottom:-10px; font-family: 'Poppins', sans-serif;">
        <b>
            DAFTAR BARANG
        </b>
    </h2>
    <h4 class="uk-heading-bullet uk-hidden@s"
        style="padding-left:20px; margin-bottom:-10px; font-family: 'Poppins', sans-serif;">
        <b>
            DAFTAR BARANG
        </b>

    </h4>

    <br><br>
    <div class="uk-grid-medium uk-child-width-1-3@s uk-text-center" uk-grid
        style="padding-left:50px; padding-right:50px;" uk-grid
        uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">

        <?php 
            
            foreach ($barangBaru as $id=>$value):
                $namaBarang = $value->nama_barang;
                $jenisBarang = $value->jenis_barang;
                $fotoBarang = $value->foto_barang;

        ?>
        <div class=" uk-text-center">
            <div class="uk-card uk-card-body uk-card-hover uk-inline-clip uk-transition-toggle" tabindex="0">
                <img src="<?php echo  "../assets/cover/".$fotoBarang; ?>" alt="" width="325px;">
                <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                    <p style="color:black;"> <b><?= $namaBarang ?></b> </p>
                    <p style="color:black;"><?= $jenisBarang ?></p>

                    <div uk-lightbox>
                        <a href="detail.php?id=<?= $id ?>" class="uk-button uk-button-text" style="color:black;"
                            data-caption=" Detail Barang <?= $value->nama_barang ?> ">Lihat
                            Detail</a>
                    </div>

                </div>
            </div>
        </div>
        <?php

            endforeach;

        ?>

    </div>
    <br>

    <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
        <div class="uk-offcanvas-bar" style="background-color:white;">

            <div class="uk-inline">
                <span style="text-decoration: none; color: black;"> <img class="uk-preserve-width uk-border-circle"
                        style="margin-left: 80px; border:2px solid black;" src="../assets/cover/dektra.jpg"
                        width="60px;" style="max-width:60px;" alt="">
                    <br>
                    <span style="font-family:'Poppins', sans-serif; color:black;" class="uk-text-center">
                        <b><?= $firstname . ' ' . $lastname ?></b> </span></span>
            </div>
            <hr style="background-color:black; margin-right:-17px; margin-left:-17px;">

            <b>
                <a href="logout.php" style="text-decoration:none; color: black;">
                    <span uk-icon="icon: sign-out;"></span>
                    Barang Yang Dipinjam
                </a>
            </b>
            <br><br>
            <b>
                <a href="logout.php" style="text-decoration:none; color: black;">
                    <span uk-icon="icon: sign-out;"></span>
                    Keluar
                </a>
            </b>


        </div>
    </div>
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
            title: 'Login Berhasil, Hai <?= $firstname . ' ' . $lastname ?>'
        })
    }
</script>
<?php
        unset($_SESSION['loginuser']);
?>
</body>

</html>