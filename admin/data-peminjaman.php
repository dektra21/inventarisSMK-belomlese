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
    <title>Inventaris - Data Peminjaman</title>
    <style>
        .padding {
            margin-left: 100px;
            margin-right: 100px;
        }

        h2,
        h3,
        h5,
        a {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="uk-animation-fade">
    <?php
        require 'dashboard-navbar.php';
    ?>
    <h2 style="margin-left: 50px; margin-top: -10px; text-decoration: underline;">Data Peminjaman</h2>

    <div class="" style="display:flex;  justify-content: space-between; margin-top:50px;">
        <div class=""></div>
        <div class="uk-card uk-card-hover uk-padding"><table class="uk-table uk-table-justify uk-table-divider">
            <thead>
                <tr align="center">
                    <th align="center" class="uk-width-small" style="padding-right:150px;">No</th>
                    <th align="center" class="uk-width-small" style="padding-right:150px;">Nama Peminjam</th>
                    <th align="center" class="uk-width-small" style="padding-right:150px;">Barang Yang Dipinjam</th>
                    <th align="center" class="uk-width-small" style="padding-right:150px;">Jumlah</th>
                    <th align="center" class="uk-width-small" style="padding-right:150px;">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dek Tra</td>
                    <td>Kursi Bangku</td>
                    <td>36</td>
                    <td><a href="data-pengembalian.php" class="uk-button uk-button-danger uk-width-1-1" style="margin-right:20px;" type="button"> <span uk-icon="reply"></span> Kembalikan</a></td>
                </tr>
            </tbody>
        </table></div>
        
        <div class=""></div>
    </div>


    <?php
        require 'off-canvas.php';
    ?>

</body>

</html>