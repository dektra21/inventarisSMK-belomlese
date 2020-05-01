<?php
$page = isset($_GET['page']) ? $_GET['page'] : NULL;

   if (isset($_SESSION['login'])){
    header("Location:index.php?page=dashboard");
    exit;
}
    $errorLogin = isset($_GET['error']) ? $_GET['error'] : NULL;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/uikit.min.css" />
    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js"></script>
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
                        <?php if ($errorLogin == '0') : ?>
                        <p style="color: red; font-style: italic;">Incorrect Username or Password!</p>
                        <?php endif; ?>
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
                            Not registered? <a href="index.php?page=register" class="uk-text-muted">Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/dist/sweetalert2.all.js"></script>
    <script>
        const flashdata = document.querySelector('#flashdata').dataset.flashdata;
        console.log(flashdata);
        if (flashdata == 'Success') {
            Swal.fire(
                'Berhasil Membuat Akun!',
                'Silahkan Login 👊🏿😎',
                'success'
            )
        }
    </script>
    <?php
        unset($_SESSION['newuser']);
    ?>
</body>

</html>