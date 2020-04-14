<div id="offcanvas-slide" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <div class="uk-inline" style="margin-bottom:-50px;">
            <span class="uk-navbar-item uk-logo uk-hidden@s uk-inline"
                style="font-family: 'Poppins', sans-serif; color:white; font-size:20px;"><img
                    class="uk-preserve-width uk-border-circle uk-hidden@s uk-inline" src="../assets/cover/logo.png"
                    width="40" alt="">
                Inventaris SMK
            </span>
        </div>
        <span class="uk-navbar-item uk-logo uk-visible@m uk-inline"
                style="font-family: 'Poppins', sans-serif; color:white; font-size:25px; margin-bottom:-50px;"><img
                    class="uk-preserve-width uk-border-circle uk-visible@m uk-inline" src="../assets/cover/logo.png"
                    width="40" alt="">
                Inventaris SMK
        </span>

        <hr>
        <div class="uk-inline">
            <a href="" style="text-decoration: none;"> <img class="uk-preserve-width uk-border-circle"
                    style="margin-right: 10px;" src="../assets/cover/account2.0.png" width="40" alt="">
                <span>Admin <?= $firstname . ' ' . $lastname ?></span></a>
        </div>
        <div uk-dropdown="mode: click"><a href="logout.php" style="text-decoration:none; color: black;"><span
                    uk-icon="icon: sign-out;"></span> Sign Out</a></div>

        <br><br>
        <a href="dashboard.php" style="text-decoration: none;">
            <h5> <b><span uk-icon="home"> </span> Dashboard</b> </h5>
        </a>
        <a href="data-peminjaman.php" style="text-decoration: none;">
            <h5><span uk-icon="file-edit"> </span> Data Peminjaman</h5>
        </a>
        <a href="data-pengembalian.php" style="text-decoration: none;">
            <h5><span uk-icon="reply"> </span> Data Pengembalian</h5>
        </a>
    </div>
</div>