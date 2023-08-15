<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/tampilkkelola.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="kategoriadmin">
        <div class="kelola-kategori-panorama-container2">
            <p class="kelola-kategori-panorama">Kelola Kategori Panorama</p>
        </div>
        <div class="kategoriadmin-child"></div>
        <div class="samping2">
            <div class="samping-inner"></div>
            <div class="kminimap2">
                <div class="kelola-minimap4">
                    <p class="kelola-kategori-panorama2">Data Visitor</p>
                </div>
                <img class="location-1-icon2" alt="" src="<?= base_url() ?>/css/public/location-1@2x.png" />
            </div>
            <div class="kkategori2">
                <div class="kkategori-inner"></div>
                <b class="kelola-kategori-panorama-container3">
                    <p class="kelola-kategori-panorama">Kelola Kategori Panorama</p>
                </b>
                <img class="school-1-icon2" alt="" src="<?= base_url() ?>/css/public/school-1@2x.png" />
            </div>
            <div class="dashboard4">
                <img class="location-1-icon2" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />

                <div class="dashboard5">Dashboard</div>
            </div>
            <div class="back4" id="frameContainer1">
                <img class="back-inner" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" />
                <script>
                    var frameContainer1 = document.getElementById("frameContainer1");
                    if (frameContainer1) {
                        frameContainer1.addEventListener("click", function(e) {
                            window.location.href = "/admin/dashboard";
                        });
                    }
                </script>
                <div class="back5">Back</div>
            </div>
            <div class="tambah">
                <img class="back-inner" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" />

                <div class="tambah-foto" id="frameContainer">Tambah Foto
                    <script>
                        var frameContainer = document.getElementById("frameContainer");
                        if (frameContainer) {
                            frameContainer.addEventListener("click", function(e) {
                                window.location.href = "/kelola/tambahkategori";
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="tabel">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id_foto</th>
                        <th scope="col">Gedung</th>
                        <th scope="col">Ruang</th>
                        <th scope="col">File</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</body>

</html>
<?= $this->endSection(); ?>