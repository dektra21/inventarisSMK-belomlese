<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/uikit.min.css" />
    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js"></script>
    <link rel="icon" href="../assets/cover/logo.png">
    <title>Inventaris - Register</title>
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
    <div>
        <div style="background-color: #E9D8BF;">
            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                <div class="uk-background-cover" style="background-image: url('../assets/cover/wallpaper.jpg');"
                    uk-height-viewport>
                </div>
                <div class="uk-padding-large">
                    <div class="uk-card uk-card-default padding  uk-animation-slide-top">
                        <h1 align="center" style="font-family:'Poppins', sans-serif; color:white;"> <b>Register</b>
                        </h1>
                        <p align="center" style="font-family:'Poppins', sans-serif; color:white; font-size:15px;">Please fill in the form below
                            before <a href="index.php" style="color:white"> <b>Sign In</b> </a> </p>
                        <form action="../include/action/User-Register.php" method="post">
                            <div class="uk-grid-small" uk-grid>

                                <div class="uk-inline uk-width-1-2@m uk-width-1-1">
                          
                                    <input class="uk-input" required type="text" name="firstname" id="firstname"
                                        placeholder="First Name..." minlength="3" maxlength="25">
                                </div>
                                <div class="uk-inline uk-width-1-2@m uk-width-1-1">
                          
                                    <input class="uk-input" required type="text" name="lastname" id="lastname"
                                        placeholder="Last Name..." minlength="3" maxlength="25">
                                </div>

                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="users"></span>
                                    <input class="uk-input" required type="username" name="username" id="username"
                                        placeholder="Enter Username..." minlength="6" maxlength="100">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="lock"></span>
                                    <input class="uk-input" required type="password" name="password" id="password" s
                                        placeholder="Enter Password...">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon " uk-icon="lock"></span>
                                    <input class="uk-input" required type="password" name="password2" id="password2"
                                        placeholder="Re-Enter Password...">
                                </div>
                            </div>
                            <div class="uk-margin">
                                <button type="submit" style="border-radius:5px;"
                                    class="uk-button uk-button-primary uk-width-1-1"
                                    style="font-family:'Poppins', sans-serif;"> <b>Register</b> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>