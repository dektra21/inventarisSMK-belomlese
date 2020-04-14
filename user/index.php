<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/uikit.min.css" />
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
    <link rel="icon" href="../assets/cover/logo.png">
    <title>Inventaris - Log In</title>
    <style>
        .uk-modal-close-full {
            background: transparent;
            color: white;
        }

        .uk-card-default {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            transition: 1s;
        }

        .padding {
            padding-left: 50px;
            padding-right: 50px;
            padding-bottom: 50px;
            padding-top: 20px;
        }

        .uk-input {
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.5);
            border-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body class="uk-animation-fade">
    <div id="flashdata" data-flashdata="<?= isset($_SESSION['newuser']) ? $_SESSION['newuser'] : NULL?>"></div>
    <div>
        <div style="background-color: #675222;">
            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                <div class="uk-background-cover" style="background-image: url('../assets/cover/background.jpg');" uk-height-viewport>
                </div>
                <div class="uk-padding-large">
                    <div class="uk-card uk-card-default padding  uk-animation-slide-bottom">
                        <h1 align="center" style="font-family:'Poppins', sans-serif; color:white;"> <b>Log In</b> </h1>
                        <form action="../include/action/User-Login.php" method="post">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" style="padding: 15px;" uk-icon="user"></span>
                                    <input class="uk-input" name="username" type="text" placeholder="Enter Username...">
                                </div>

                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" style="padding: 15px;" uk-icon="lock"></span>
                                    <input class="uk-input" name="password" type="password" placeholder="Enter Password...">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <button style="border-radius:5px;"
                                    class="uk-button uk-button-primary uk-width-1-1"
                                    style="font-family:'Poppins', sans-serif;" type="submit"> <b>Login</b> </button>
                            </div>
                        </form>
                        
                        <div class="uk-text-small  uk-text-center">
                            Not registered? <a href="register.php" class="uk-text-muted">Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/dist/sweetalert2.all.js"></script>
    <script>
        const flashdata = document.querySelector('#flashdata').dataset.flashdata;
        if (flashdata == 'Success') {
            Swal.fire(
                'Success Create Account!',
                'Please Sign In',
                'success'
            )
        }
    </script>
    <?php
        unset($_SESSION['newuser']);
    ?>
</body>

</html>


Tidak ada cara terbaik untuk menangani hama di pertanian. Pestisida yang biasa digunakan dapat menyebabkan banyak masalah. Saya pikir menggabungkan operasi manajemen yang berbeda adalah cara paling efektif untuk mengendalikan hama.
Pertama, bahan kimia dalam pestisida dapat menumpuk sebagai residu di lingkungan dan di tanah yang menyerap bahan kimia. Ini mengurangi kualitas produk pertanian.
Kedua, hama secara bertahap bisa menjadi resisten terhadap pestisida. Ini berarti bahwa yang lebih baru dan lebih kuat harus dikembangkan.
Terakhir, beberapa pestisida mempengaruhi tanaman dan hewan non-target seperti ikan dan lebah. Ini mempengaruhi ekologi dan lingkungan juga.
Jadi, pemahaman ekologi suatu daerah sangat membantu dalam pengendalian hama. Pestisida harus dipilih dan diterapkan dengan hati-hati sehingga tidak mempengaruhi keseimbangan ekologis dan lingkungan.
Oleh karena itu, pengelolaan hama terpadu adalah pilihan yang aman dan lebih efektif untuk memerangi hama di pertanian dan peternakan.

Salah satu kelemahan menggunakan pestisida kimia adalah ...
Pilih satu:
a. menciptakan ekosistem yang seimbang.
b. menyebabkan hama menjadi tidak aktif
c. meningkatkan produktivitas tanaman.
d. membunuh ikan dan lebah.
e. membantu mengurangi polutan di lingkungan