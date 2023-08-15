<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/tampilK.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="kkategori4">
        <div class="kelola-kategori-panorama-container4">
            <p class="kelola-kategori-panorama4">Kelola Kategori Panorama</p>
        </div>
        <div class="kkategori-inner"></div>
        <div class="samping4">
            <div class="samping-child2"></div>
            <div class="kminimap4">
                <div class="kelola-minimap8">
                    <p class="kelola-kategori-panorama4">Kelola Minimap</p>
                </div>
                <img class="location-1-icon4" alt="" src="<?= base_url() ?>/css/public/location-1@2x.png" />
            </div>
            <div class="kkategori5">
                <div class="kkategori-child1"></div>
                <b class="kelola-kategori-panorama-container5">
                    <p class="kelola-kategori-panorama4">Kelola Kategori Panorama</p>
                </b>
                <img class="school-1-icon4" alt="" src="<?= base_url() ?>/css/public/school-1@2x.png" />
            </div>

            <div class="dashboard8">
                <img class="location-1-icon4" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />

                <div class="dashboard9">Dashboard</div>
            </div>
            <div class="kuser4">
                <div class="kelola-user8">
                    <p class="kelola-kategori-panorama4">Kelola Admin</p>
                </div>
                <img class="users-1-icon4" alt="" src="<?= base_url() ?>/css/public/users-1@2x.png" />
            </div>
            <div class="back8" id="back">
                <script>
                    var back = document.getElementById("back");
                    if (back) {
                        back.addEventListener("click", function(e) {
                            window.location.href = "/superadmin";
                        });
                    }
                </script>
                <img class="back-child1" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" />

                <div class="back9">Logout</div>
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
                <tbody>
                    <tr>
                        <td>..</td>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                        <td><a href="/superkpanorama/update">update</a> <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">delete</button></td>
                    </tr>
                </tbody>

            </table>
        </div>
        <a href="/superkpanorama/tambah" class="btn btn-primary" style=" margin-left: 900px;">Add data</a>
        <img class="edit-2-icon" alt="" src="<?= base_url() ?>/css/public/edit-2@2x.png" />

        <img class="image-removebg-preview-5-1" alt="" src="<?= base_url() ?>/css/public/imageremovebgpreview-5-1@2x.png" />
    </div>
</body>

</html>
<?= $this->endSection(); ?>