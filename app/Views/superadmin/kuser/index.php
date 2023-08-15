<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/kelolauser.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="kelola-user6">
        <div class="kelola-user7">

        </div>

        <h1 class="mt-1" style=" margin-left: 350px;">Data Admin</h1>
        <a href="<?= base_url('superadmin/tambahuser') ?>" class="btn btn-primary" style=" margin-left: 350px;">Add data</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Asal Kota</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Email</th>

                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($user as $k) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $k['nama']; ?></td>
                        <td><?= $k['askot']; ?></td>
                        <td><?= $k['umur']; ?></td>
                        <td><?= $k['email']; ?></td>
                        <td><?= $k['role']; ?></td>
                        <td>
                            <a href="/superadmin/update/<?= $k['id_user']; ?>">update</a>
                            <form action="/superadmin/delete/<?= $k['id_user']; ?>" method="POST" style="display: inline-block;">
                                <?= csrf_field(); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">delete</button>
                            </form>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>


        </table>
        <div class="samping3">
            <div class="samping-child1"></div>
            <div class="kminimap3" id="visitor">
                <button class="button-like">
                    <script>
                        var visitor = document.getElementById("visitor");
                        if (visitor) {
                            visitor.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('visitor') ?>";
                            });
                        }
                    </script>
                    <div class="kelola-minimap6">
                        <p class="kelola-user8">Data Visitor</p>
                    </div>
                    <img class="location-1-icon3" alt="" src="<?= base_url() ?>/css/public/location-1@2x.png" />
                </button>
            </div>
            <div class="kkategori3">
                <button class="button-like">
                    <div class="kelola-kategori-panorama-container3" id="frameContainer1">
                        <script>
                            var frameContainer1 = document.getElementById("frameContainer1");
                            if (frameContainer1) {
                                frameContainer1.addEventListener("click", function(e) {
                                    window.location.href = "<?= base_url('superkpanorama/tambah') ?>";
                                });
                            }
                        </script>
                        <p class="kelola-user8">Kelola Kategori Panorama</p>
                    </div>
                    <img class="school-1-icon3" alt="" src="<?= base_url() ?>/css/public/school-1@2x.png" />
                </button>
            </div>

            <div class="dashboard6" id="dashboard">
                <button class="button-like">
                    <script>
                        var dashboard = document.getElementById("dashboard");
                        if (dashboard) {
                            dashboard.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('superadmin') ?>";
                            });
                        }
                    </script>
                    <img class="location-1-icon3" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />

                    <div class="dashboard7">Dashboard</div>
                </button>
            </div>
            <div class="kuser3">
                <div class="kuser-inner"></div>
                <b class="kelola-user9">
                    <p class="kelola-user8">Kelola Admin</p>
                </b>
                <img class="users-1-icon3" alt="" src="<?= base_url() ?>/css/public/users-1@2x.png" />
            </div>
            <div class="krespon" id="respon">
                <button class="button-like">
                    <script>
                        var respon = document.getElementById("respon");
                        if (respon) {
                            respon.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('superadmin/respon') ?>";
                            });
                        }
                    </script>
                    <div class="kelola-respon-ketertarikan">
                        Kelola Respon Ketertarikan
                    </div>
                    <img class="school-1-icon" alt="" src="<?= base_url() ?>/css/public/registrationform-2@2x.png" />
                </button>
            </div>
            <div class="back6">
                <img class="back-child1" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" onclick="window.location.href = document.querySelector('.back1 a').getAttribute('href');" />

                <div class="back7" id="frameContainer">
                    <div class="back1"><a href="<?= base_url('superadmin') ?>">Back</a></div>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>


<?= $this->endSection(); ?>