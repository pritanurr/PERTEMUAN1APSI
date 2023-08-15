<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/tambah.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/tampil.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="tambahkategori">
        <div class="samping4">
            <div class="samping-child2"></div>

            <div class="kkategori5">
                <div class="kkategori-child1"></div>
                <b class="kelola-kategori-panorama-container5">
                    <p class="kelola-kategori-panorama4">Kelola Kategori Panorama</p>
                </b>
                <img class="school-1-icon4" alt="" src="<?= base_url() ?>/css/public/school-1@2x.png" />
            </div>
            <div class="krespon4" id="frameContainer1">
                <button class="button-like">
                    <script>
                        var frameContainer1 = document.getElementById("frameContainer1");
                        if (frameContainer1) {
                            frameContainer1.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('admin/respon') ?>";
                            });
                        }
                    </script>
                    <div class="kelola-respon-ketertarikan4">
                        Kelola Respon Ketertarikan
                    </div>
                    <img class="registration-form-1-icon4" alt="" src="<?= base_url() ?>/css/public/registrationform-1@2x.png" />
            </div>
            <div class="dashboard8" id="dashboard">
                <button class="button-like">
                    <script>
                        var dashboard = document.getElementById("dashboard");
                        if (dashboard) {
                            dashboard.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('admin/dashboard') ?>";
                            });
                        }
                    </script>
                    <img class="location-1-icon4" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />

                    <div class="dashboard9">Dashboard</div>
            </div>
            <div class="back8" id="frameContainer">
                <button class="button-like">
                    <img class="back-child1" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" />
                    <script>
                        var frameContainer = document.getElementById("frameContainer");
                        if (frameContainer) {
                            frameContainer.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('admin/dashboard') ?>";
                            });
                        }
                    </script>
                    <div class="back9">Back</div>
            </div>
        </div>
        <div class="tambah-kategori-panorama">Edit Kategori Panorama</div>
        <div class="tambahkategori-child" id="frame"></div>

        <div class="form">

            <form action="<?= base_url('admin/insert') ?>" method="post" enctype="multipart/form-data">
                <input type="file" class="form-control" id="exampleInputaskot1" name="foto" required>

                <div class="gedung">
                    <div class="id-foto-child"></div>
                    <div class="gedung1">
                        <select name="gedung" class="form-control" required>
                            <option value="">-- Hak Akses --</option>
                            <?php $role = $_SESSION['role']; ?>
                            <?php if ($role === '2') : ?>
                                <option value="Agroindustri">Agroindustri</option>
                            <?php elseif ($role === '3') : ?>
                                <option value="Keperawatan">Keperawatan</option>
                            <?php elseif ($role === '5') : ?>
                                <option value="JMI">JMI</option>
                            <?php elseif ($role === '4') : ?>
                                <option value="Mesin">Mesin</option>
                            <?php elseif ($role === '1') : ?>
                                <option value="JMI">JMI</option>
                                <option value="Agroindustri">Agroindustri</option>
                                <option value="Mesin">Mesin</option>
                                <option value="Keperawatan">Keperawatan</option>
                                <option value="GKB">GKB</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>

        </div>

        <div class="tambah">
            <button type="submit">Edit</button>
            <!-- <p class="kelola-kategori-panorama">Tambah</p> -->
        </div>
        <div class="tambah">
            <button type="submit" style="margin-left: 400px;">Download</button>
            <!-- <p class="kelola-kategori-panorama">Tambah</p> -->
        </div>
        </form>
        <form action="<?= base_url('admin/download') ?>" method="post">
            <div class="gedung2">
                <div class="id-foto-child"></div>
                <div class="gedung1">
                    <select name="gedung" class="form-control" required>
                        <option value="">-- Hak Akses --</option>
                        <?php $role = $_SESSION['role']; ?>
                        <?php if ($role === '2') : ?>
                            <option value="Agroindustri">Agroindustri</option>
                        <?php elseif ($role === '3') : ?>
                            <option value="Keperawatan">Keperawatan</option>
                        <?php elseif ($role === '4') : ?>
                            <option value="Mesin">Mesin</option>
                        <?php elseif ($role === '5') : ?>
                            <option value="JMI">JMI</option>
                        <?php elseif ($role === '1') : ?>
                            <option value="JMI">JMI</option>
                            <option value="Agroindustri">Agroindustri</option>
                            <option value="Mesin">Mesin</option>
                            <option value="Keperawatan">Keperawatan</option>
                            <option value="GKB">GKB</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="tambah">
                <button type="submit" style="margin-left: 400px;">Download</button>
                <!-- <p class="kelola-kategori-panorama">Tambah</p> -->
            </div>
        </form>
        <!-- <div class="donwload">
            <button type="submit">donwload</button>
            <!-- <p class="kelola-kategori-panorama">Tambah</p> -->
    </div> -->
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