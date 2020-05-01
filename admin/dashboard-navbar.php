<style>
    .tambah:hover {
        border-radius: 100px;
        margin: 10px;
        background-color: lightgrey;
        transition: 1s;
    }

    .info:hover {
        border-radius: 100px;
        padding: 10px;
        background-color: lightgrey;
        transition: 1s;
    }
</style>
<nav class="uk-navbar-container" style="margin-bottom:30px;" uk-navbar>
    <div class="uk-navbar-left">
        <a href="" class="uk-visible@m" style="color: black;" uk-toggle="target: #offcanvas-slide"><span
                uk-icon="icon: menu; ratio: 2" style="padding:10px;"></span></a>
        <a href="" class="uk-hidden@s" style="color: black;" uk-toggle="target: #offcanvas-slide"><span
                uk-icon="icon: menu; ratio: 1.5" style="padding:10px;"></span></a>
        <a class="uk-navbar-item uk-logo" href="dashboard.php">
            <h2 style="margin-top:20px;" class="uk-visible@m">Inventaris SMK</h2>
            <h3 style="margin-top:13px; margin-left:-10px;" class="uk-hidden@s">Inventaris SMK</h3>
        </a>
    </div>
    <div class="uk-navbar-right" style="margin-right: 50px;">
        <a class="uk-visible@m tambah" href="#modal-sections" style="color:black; margin-right:16px; padding:8px;"
            uk-toggle><span style="" uk-icon="icon: plus; ratio: 2"></span></a>
        <a class="uk-hidden@s" href="#modal-sections" style="color:black;" uk-toggle><span style="margin-right:-2200px;"
                uk-icon="icon: plus; ratio: 1.5"></span></a>
        <div class="uk-inline uk-visible@m info" style="padding:10px;">
            <a href="" style="text-decoration: none; color: black;"> <img class="uk-preserve-width uk-border-circle"
                    style="margin-right: 10px;" src="../assets/cover/account2.0.png" width="50" alt="">

                <span>Admin <?= $firstname . ' ' . $lastname ?></span></a>
        </div>
        <div uk-dropdown="mode: click" class="uk-visible@m"><a href="logout.php"
                style="text-decoration:none; color: black;"><span uk-icon="icon: sign-out;"></span> Sign Out</a></div>
    </div>
</nav>

<div id="modal-sections" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Tambah Barang</h2>
        </div>
        <div class="uk-modal-body">
            <form action="../include/action/Tambah-Barang.php" method="post" enctype="multipart/form-data">
                <p>Nama Barang</p>
                <input type="text" class="uk-input" name="nama">
                <p>Jenis Barang</p>
                <input type="text" class="uk-input" name="jenis">
                <p>Foto Barang</p>
                <input type="file" class="uk-input" name="cover">
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-primary" type="submit">Tambah Barang</button>
        </div>
        </form>
    </div>

</div>
</div>