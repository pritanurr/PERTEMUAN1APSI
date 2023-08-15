<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/edituser.css" />
    <style>
        .form-label {
            margin-top: -30px !important;

        }

        .form-control {

            margin-top: -10px;
            height: 30px;

        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="edit-user">
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
                        <p class="kelola-kategori-panorama">Data Visitor</p>
                    </div>
                    <img class="location-1-icon" alt="" src="<?= base_url() ?>/css/public/location-1@2x.png" />
            </div>
            <div class="kkategori" id="frameContainer1">
                <button class="button-like">
                    <script>
                        var frameContainer1 = document.getElementById("frameContainer1");
                        if (frameContainer1) {
                            frameContainer1.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('/superkpanorama/tambah') ?>";
                            });
                        }
                    </script>
                    <div class="kelola-kategori-panorama-container">
                        <p class="kelola-kategori-panorama">Kelola Kategori Panorama</p>
                    </div>
                    <img class="school-1-icon" alt="" src="<?= base_url() ?>/css/public/school-1@2x.png" />
            </div>
            <div class="krespon" id="respon">
                <button class="button-like">
                    <script>
                        var respon = document.getElementById("respon");
                        if (respon) {
                            respon.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('/superadmin/respon') ?>";
                            });
                        }
                    </script>
                    <div class="kelola-respon-ketertarikan">
                        Kelola Respon Ketertarikan
                    </div>
                    <img class="registration-form-1-icon" alt="" src="<?= base_url() ?>/css/public/registrationform-1@2x.png" />
            </div>
            <div class="dashboard">
                <img class="location-1-icon" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />

                <div class="dashboard1">Dashboard</div>
            </div>
            <div class="kuser">
                <button class="button-like" id="fra">
                    <script>
                        var frameContainer = document.getElementById("frameContainer");
                        if (frameContainer) {
                            frameContainer.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('/superadmin/kelolauser') ?>";
                            });
                        }
                    </script>
                    <div class="kuser-child"></div>
                    <b class="kelola-user">
                        <p class="kelola-kategori-panorama">Kelola Admin</p>
                    </b>
                    <img class="users-1-icon" alt="" src="<?= base_url() ?>/css/public/users-1@2x.png" />
            </div>
            <div class="back">
                <img class="back-child" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" onclick="window.location.href = document.querySelector('.back1 a').getAttribute('href');" />

                <div class="back1"><a href="<?= base_url('/superadmin/kelolauser') ?>">Back</a></div>
            </div>

        </div>
        <div class="edit-data-user">Edit Data User</div>
        <form action="/superadmin/ubah/<?= $user['id_user']; ?>" method="post">
            <div class="form">
                <div class="form-child">
                    <label for="exampleInputnama1" class="form-label">Nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?> " id="exampleInputnama1" name="nama" value="<?= $user['nama']; ?>" autofocus required>
                </div>
                <div class="form-item">
                    <label for="exampleInputaskot1" class="form-label">Asal Kota</label>
                    <input type="text" class="form-control" id="exampleInputaskot1" name="askot" value="<?= $user['askot']; ?>" required>
                </div>
                <div class="form-inner">
                    <label for="exampleInputUmur1" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="exampleInputUmur1" name="umur" value="<?= $user['umur']; ?>" required>
                </div>
                <div class="form-child1">
                    <label for="exampleInputemail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputemail1" name="email" value="<?= $user['email']; ?>" aria-describedby="emailHelp" required>
                </div>
                <div class="form-child2">

                    <input type="hidden" class="form-control" id="exampleInputpassword1" name="password" value="<?= $user['password']; ?>" required>
                </div>

                <div class="form-child3">

                    <select name="role" id="exampleInputrole1" class="form-control" required>
                        <option value="1" <?= $user['role'] == 1 ? 'selected' : ''; ?>>1. Super Admin</option>
                        <option value="5" <?= $user['role'] == 5 ? 'selected' : ''; ?>>2. Admin JMI</option>
                        <option value="2" <?= $user['role'] == 2 ? 'selected' : ''; ?>>3. Admin Agroindustri</option>
                        <option value="4" <?= $user['role'] == 4 ? 'selected' : ''; ?>>4. Admin TPPM</option>
                        <option value="3" <?= $user['role'] == 3 ? 'selected' : ''; ?>>5. Admin Keperawatan</option>
                    </select>
                </div>


            </div>
            <div class="edit-user-child" id="frame"></div>
            <div class="ubah">
                <img class="ubah-child" alt="" src="<?= base_url() ?>/css/public/rectangle-171.svg" onclick="document.querySelector('.ubah1 button[name=submit]').click();" />

                <div class="ubah1">
                    <button type="submit" name="submit" class="btn btn-primary" value="submit" style="background-color: #00116d; border-color: #00116d;">Update</button>
                </div>
            </div>

        </form>
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