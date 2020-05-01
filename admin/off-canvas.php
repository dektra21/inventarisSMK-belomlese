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
        <a href="index.php?page=dashboard" style="text-decoration: none;">
            <h5 class="<?= $peminjaman, $pengembalian == NULL ? 'uk-active' : '' ?>"
                style="<?= $peminjaman, $pengembalian == NULL ? 'color:grey;' : '' ?>"> <span
                    uk-icon="home"> </span> Dashboard </h5>
        </a>

        <a href="index.php?page=dashboard&peminjaman=data-peminjaman" style="text-decoration: none;">
            <h5 class="<?= $peminjaman == 'data-peminjaman' ? 'uk-active' : '' ?>"
                style=" <?= $peminjaman == 'data-peminjaman' ? 'color:grey;' : '' ?>"><span
                    uk-icon="file-edit">
                </span> Data Peminjaman</h5>
        </a>

        <a href="index.php?page=dashboard&pengembalian=data-pengembalian" style="text-decoration: none;">
            <h5 class="<?= $pengembalian == 'data-pengembalian' ? 'uk-active' : '' ?>"
                style=" <?= $pengembalian == 'data-pengembalian' ? 'color:grey;' : '' ?>"><span
                    uk-icon="reply">
                </span> Data Pengembalian</h5>
        </a>
    </div>
</div>