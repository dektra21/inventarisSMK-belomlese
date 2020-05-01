<?php
    require '../Connection.php';
    require '../class/UsersClass.php';
    
    $classUsers = new UsersClass($pdo);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password != $password2) {
        //kalo password yang pertama ga sama dengan password yang kedua bakal ke sini
        echo "
        <script>
            alert('Password Berbeda');
            document.location.href = '../../user/index.php?page=register';
        </script>
    ";
    }else{
        $register = $classUsers->register($firstname, $lastname, $username, $password, $password2);

        if ($register == 'Success') {
            //kalo berhasil masuk ke database bakal ke sini
            $_SESSION['newuser'] = $register;
            header('Location:../../user/index.php');
        }
        elseif ($register == 'Exist') {
            //kalo username sama bakal ke sini
            echo "
            <script>
                alert('Username Sudah Ada);
                document.location.href = '../../user/index.php?page=register';
            </script>
        ";
        }
        else {
            //kalo data gagal masuk bakal ke sini
            echo "
            <script>
                alert('Data Gagal Masuk');
                document.location.href = '../../user/index.php?page=register';
            </script>
        ";
        }
    }

    
?>