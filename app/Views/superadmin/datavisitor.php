<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/visitor.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="kkategori4">
        <div class="kelola-kategori-panorama-container4">
            <p class="kelola-kategori-panorama4">Data Visitor</p>
        </div>
        <div class="kkategori-inner"></div>
        <div class="samping4">
            <div class="samping-child2"></div>
            <div class="kminimap">
                <div class="kminimap-child"></div>
                <b class="data-visitor">
                    <p class="p">Data Visitor</p>
                </b>
                <img class="location-1-icon" alt="" src="<?= base_url() ?>/css/public/location-1@2x.png" />
            </div>
            <div class="kkategori5" id="kategori">
                <button class="button-like">
                    <script>
                        var kategori = document.getElementById("kategori");
                        if (kategori) {
                            kategori.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('/superkpanorama/tambah') ?>h";
                            });
                        }
                    </script>

                    <p class="kelolakategoripanorama">Kelola Kategori <br> Panorama</p>

                    <img class="school-1-icon4" alt="" src="<?= base_url() ?>/css/public/school-1@2x.png" />
                </button>
            </div>

            <div class="dashboard8" id="dashboard">
                <button class="button-like">
                    <script>
                        var dashboard = document.getElementById("dashboard");
                        if (dashboard) {
                            dashboard.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('superadmin') ?>";
                            });
                        }
                    </script>
                    <img class="location-1-icon4" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />

                    <div class="dashboard9">Dashboard</div>
                </button>
            </div>
            <div class="kuser4" id="kuser">
                <button class="button-like">
                    <script>
                        var kuser = document.getElementById("kuser");
                        if (kuser) {
                            kuser.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('/superadmin/kelolauser') ?>";
                            });
                        }
                    </script>
                    <div class="kelola-user8">
                        <p class="kelola-kategori-panorama4">Kelola Admin</p>
                    </div>
                    <img class="users-1-icon4" alt="" src="<?= base_url() ?>/css/public/users-1@2x.png" />
                </button>
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
                    <img class="school-1-icon" alt="" src="<?= base_url() ?>/css/public/registrationform-2@2x.png" />
                </button>
            </div>
            <div class="back8" id="frameContainer1">
                <button class="button-like">
                    <script>
                        var frameContainer1 = document.getElementById("frameContainer1");
                        if (frameContainer1) {
                            frameContainer1.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('superadmin') ?>";
                            });
                        }
                    </script>
                    <img class="back-child1" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" />

                    <div class="back9">Back</div>
                </button>
            </div>
        </div>
        <div class="tabel">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $k) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $k['age_range']; ?></td>
                            <td><?= $k['latitude']; ?></td>
                            <td><?= $k['longitude']; ?></td>
                            <td><?= $k['created_at']; ?></td>
                            <td>
                                <form action="/visitor/delete/<?= $k['id']; ?>" method="POST" style="display: inline-block;">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">delete</button>
                                </form>
                            </td>
                        <?php endforeach; ?>

                        </tr>
                </tbody>

            </table>
        </div>


    </div>
</body>

</html>
<?= $this->endSection(); ?>