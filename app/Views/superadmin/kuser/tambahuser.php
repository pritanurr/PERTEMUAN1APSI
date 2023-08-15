<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/tambahuser.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>

    <div class="tambahuser">
        <form action="<?= base_url('/superadmin/save') ?>" method="post">
            <div class="tambah-data-user">Tambah Data User</div>
            <div class="form1">
                <div class="form-child3">
                    <label for="exampleInputnama1" class="form-label">nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> " id="exampleInputnama1" name="nama" autofocus required>
                </div>
                <div class="form-child4">
                    <label for="exampleInputaskot1" class="form-label">Asal Kota</label>
                    <input type="text" class="form-control" id="exampleInputaskot1" name="askot" required>
                </div>
                <div class="form-child5">
                    <label for="exampleInputUmur1" class="form-label">umur</label>
                    <input type="number" class="form-control" id="exampleInputUmur1" name="umur" required>
                </div>
                <div class="form-child6">
                    <label for="exampleInputemail1" class="form-label">email</label>
                    <input type="email" class="form-control" id="exampleInputemail1" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="form-child8">
                    <select name="role" class="form-control" required>
                        <option value="">--hak akses--</option>
                        <option value="5">1.Admin JMI</option>
                        <option value="2">2.Admin Agroindustri</option>
                        <option value="3">3.Admin Keperawatan</option>
                        <option value="4">4.Admin TPPM</option>
                    </select>
                </div>

                <div class="data-user1">Data User</div>

            </div>
            <div class="tambahuser-child" id="frame"></div>
            <div class="ubah3">
                <img class="ubah-inner" alt="" src="<?= base_url() ?>/css/public/rectangle-171.svg" onclick="document.querySelector('.btn.btn-primary').click();" />

                <div class="ubah4">
                    <button type="submit" class="btn btn-primary" value="login" style="background-color: #00116d; border-color: #00116d;">Submit</button>
                </div>
            </div>


        </form>
        <div class="samping2">
            <div class="samping-inner"></div>
            <div class="kminimap2">
                <div class="kelola-minimap4" id="visitor">
                    <button class="button-like">
                        <script>
                            var visitor = document.getElementById("visitor");
                            if (visitor) {
                                visitor.addEventListener("click", function(e) {
                                    window.location.href = "<?= base_url('visitor') ?>";
                                });
                            }
                        </script>
                        <p class="kelola-minimap5">Data Visitor</p>
                    </button>
                </div>
                <img class="location-1-icon2" alt="" src="<?= base_url() ?>/css/public/location-1@2x.png" />
            </div>
            <div class="kkategori2">
                <div class="kelola-kategori-panorama-container2" id="frameContainer1">
                    <button class="button-like">
                        <script>
                            var frameContainer1 = document.getElementById("frameContainer1");
                            if (frameContainer1) {
                                frameContainer1.addEventListener("click", function(e) {
                                    window.location.href = "<?= base_url('superkpanorama/tambah') ?>";
                                });
                            }
                        </script>
                        <p class="kelola-minimap5">Kelola Kategori Panorama</p>
                    </button>
                </div>
                <img class="school-1-icon2" alt="" src="<?= base_url() ?>/css/public/school-1@2x.png" />
            </div>
            <div class="krespon2" id="respon">
                <button class="button-like">
                    <script>
                        var respon = document.getElementById("respon");
                        if (respon) {
                            respon.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('superadmin/respon') ?>";
                            });
                        }
                    </script>
                    <div class="kelola-respon-ketertarikan2">
                        Kelola Respon Ketertarikan
                    </div>
                    <img class="registration-form-1-icon2" alt="" src="<?= base_url() ?>/css/public/registrationform-1@2x.png" />
                </button>
            </div>
            <div class="dashboard4" id="frameContainer">
                <button class="button-like">
                    <img class="location-1-icon2" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />
                    <script>
                        var frameContainer = document.getElementById("frameContainer");
                        if (frameContainer) {
                            frameContainer.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('superadmin') ?>";
                            });
                        }
                    </script>
                    <div class="dashboard5">Dashboard</div>
                </button>
            </div>
            <div class="kuser2">
                <div class="kuser-item"></div>
                <b class="kelola-user4">
                    <p class="kelola-minimap5">Kelola Admin</p>
                </b>
                <img class="users-1-icon2" alt="" src="<?= base_url() ?>/css/public/users-1@2x.png" />
            </div>
            <div class="back4">
                <img class="back-inner" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" onclick="window.location.href = document.querySelector('.back5 a').getAttribute('href');" />

                <div class="back5"><a href="<?= base_url('/superadmin/kelolauser') ?>">Back</a></div>
            </div>

        </div>
    </div>

    <script>
        var frame = document.getElementById("frame");
        if (frame) {
            frame.addEventListener("click", function(e) {
                window.location.href = "./Verifikasi.html";
            });
        }
    </script>
</body>

</html>




<?= $this->endSection(); ?>