<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/dashboard.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="dashboard-admin">
        <img class="settings-1-icon" alt="" src="<?= base_url() ?>/css/public/settings-1@2x.png" />

        <div class="jumlahuser">
            <div class="jumlahuser-child"></div>
            <div class="user">Admin</div>
            <b class="b">
                <p class="p"><?= $adminCount ?></p>
            </b>
            <img class="users-2-icon" alt="" src="<?= base_url() ?>/css/public/users-2@2x.png" />
        </div>
        <div class="jumlahuser1">
            <div class="jumlahuser-item"></div>
            <div class="kategori-panorama" type="button">Kategori Panorama</div>
            <b class="b1">
                <p class="p">20</p>
            </b>
        </div>
        <div class="jumlahuser2">
            <div class="jumlahuser-inner"></div>
            <div class="respon-ketertarikan2">Respon Ketertarikan</div>
            <b class="b1">
                <p class="p"><?= $responCount ?></p>
            </b>
        </div>
        <div class="datavisit">
            <div class="datavisit-inner">
                <img class="location" alt="" src="<?= base_url() ?>/css/public/location-1@2x.png" />
            </div>
            <div class="datavisit1">Data Visitor</div>
            <b class="b1">
                <p class="p"><?= $visitorCount ?></p>
            </b>

        </div>
        <img class="school-2-icon" alt="" src="<?= base_url() ?>/css/public/school-2@2x.png" />
        <img class="location" alt="" src="<?= base_url() ?>/css/public/location-1@2x.png" />
        <img class="registration-form-2-icon" alt="" src="<?= base_url() ?>/css/public/registrationform-2@2x.png" />

        <div class="samping">
            <div class="samping-child"></div>
            <div class="kminimap" id="visitor">
                <button class="button-like">
                    <script>
                        var visitor = document.getElementById("visitor");
                        if (visitor) {
                            visitor.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('visitor') ?>";
                            });
                        }
                    </script>
                    <div class="kelola-minimap">
                        <p class="p">Data Visitor</p>
                    </div>
                    <img class="location-1-icon" alt="" src="<?= base_url() ?>/css/public/location-1@2x.png" />
                </button>
            </div>

            <div class="kkategori">
                <div class="kelola-kategori-panorama-container" id="frameContainer1">
                    <button class="button-like">
                        <script>
                            var frameContainer1 = document.getElementById("frameContainer1");
                            if (frameContainer1) {
                                frameContainer1.addEventListener("click", function(e) {
                                    window.location.href = "<?= base_url('/superkpanorama/tambah') ?>";
                                });
                            }
                        </script>
                        <p class="p">Kelola Kategori Panorama</p>
                </div>
                <img class="school-1-icon" alt="" src="<?= base_url() ?>/css/public/school-1@2x.png" />
                </button>
            </div>

            <div class="krespon">
                <div class="kelola-respon-ketertarikan" id="respon">
                    <button class="button-like">
                        <script>
                            var respon = document.getElementById("respon");
                            if (respon) {
                                respon.addEventListener("click", function(e) {
                                    window.location.href = "<?= base_url('/superadmin/respon') ?>";
                                });
                            }
                        </script>
                        Kelola Respon Ketertarikan
                </div>
                <img class="school-1-icon" alt="" src="<?= base_url() ?>/css/public/registrationform-2@2x.png" />
                <button class="button-like">
            </div>

            <div class="dashboard">
                <div class="dashboard-child"></div>
                <img class="categories-1-icon" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />

                <b class="dashboard1">Dashboard</b>
            </div>
            <div class="kuser">
                <div class="kelola-user" id="frameContainer">
                    <button class="button-like">
                        <script>
                            var frameContainer = document.getElementById("frameContainer");
                            if (frameContainer) {
                                frameContainer.addEventListener("click", function(e) {
                                    window.location.href = "<?= base_url('/superadmin/kelolauser') ?>";
                                });
                            }
                        </script>
                        <p class="p">Kelola Admin</p>
                </div>
                <img class="users-1-icon" alt="" src="<?= base_url() ?>/css/public/users-1@2x.png" />
                <button class="button-like">
            </div>
            <div class="back" id="back">
                <button class="button-like">
                    <script>
                        var back = document.getElementById("back");
                        if (back) {
                            back.addEventListener("click", function(e) {
                                window.location.href = document.querySelector('.back1 a').getAttribute('href');
                            });
                        }
                    </script>
                    <img class="back-child" alt="" src="<?= base_url() ?>/css/public/rectangle-181.svg" onclick="window.location.href = document.querySelector('.back1 a').getAttribute('href');" />

                    <div class="back1"><a href="<?= base_url('login/logout') ?>">Logout</a></div>
            </div>



        </div>
    </div>
    </div>
</body>

</html>

<?= $this->endSection(); ?>