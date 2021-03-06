<?php
require '../include/Connection.php';
require '../include/class/BarangClass.php';

$BarangClass = new BarangClass($pdo);
$barangBaru = $BarangClass->barangBaru();

$id = $_GET['id'];

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
    <style>
        .uk-input {
            border-radius: 5px;
        }

        a {
            padding-bottom: 50px;
        }

        .uk-button-secondary {
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
        }

        .uk-button-secondary:hover {
            background-color: white;
            color: black;
            border-color: black;
            transition: 0.10s;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="uk-grid-divider uk-child-width-expand@s uk-animation-fade" uk-grid style="padding-top:65px; ">
        <div class="uk-grid-item-match" style="padding-left:123px; ">
            <div class="uk-card uk-card-body">

                <img src="../assets/cover/kursi-kelas.png" alt="" width="80%;" style="padding-left:70px;">

            </div>
        </div>
        <div>
            <form action="tambah-barang.php" method="post">
            <?php 
            
            // foreach ($barangBaru as $id=>$value):
            //     $namaBarang = $value->nama_barang;
            //     $jenisBarang = $value->jenis_barang;
            //     $fotoBarang = $value->foto_barang;

        ?>

                <h2 class="uk-heading-bullet" style="font-family: 'Poppins', sans-serif;">
                    <b>Kursi Bangku</b> </h2>
                <h4>
                    Jenis : <br>
                  <b>Meuble</b> 
                </h4>
                Deskripsi :
                <p style="padding-right:100px; margin-top:5px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                    corrupti dolores veritatis reiciendis
                    sit magni, beatae laborum delectus voluptatibus illum omnis fugit ab unde commodi facilis dolorum
                    voluptates exercitationem perspiciatis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis esse molestias praesentium dolor
                    odit
                    dolorem accusamus laboriosam, quaerat sit iste, nesciunt quis!
                </p>

                <?php

                // endforeach;

                ?>
                <input type="number" name="jumlah" class="uk-input uk-width-1-5" placeholder="  Berapa?" min="1"
                    required>
                <!-- untuk mengetahui id yang akan diambil BOSS -->
                <input type="hidden" name="id" id="" value="<?= $id ?>">
                <br><br>
                <button type="submit" nama ="tombol" class="uk-button uk-button-secondary uk-card-hover"> PINJAM BARANG </button>

            </form>

        </div>
    </div>

</body>

</html>