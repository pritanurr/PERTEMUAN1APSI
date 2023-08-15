<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />

    <link rel="stylesheet" href="<?= base_url() ?>/css/editKategori.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/tampilK.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>
    <div class="editkadmin">
        <div class="edit-kategori-panorama-container">
            <p class="edit-kategori-panorama">Edit Kategori Panorama</p>
        </div>
        <div class="editkadmin-child"></div>
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
            <div class="krespon4">
                <div class="kelola-respon-ketertarikan4">
                    Kelola Respon Ketertarikan
                </div>
                <img class="registration-form-1-icon4" alt="" src="<?= base_url() ?>/css/public/registrationform-1@2x.png" />
            </div>
            <div class="dashboard8">
                <img class="location-1-icon4" alt="" src="<?= base_url() ?>/css/public/categories-1@2x.png" />

                <div class="dashboard9">Dashboard</div>
            </div>
            <div class="kuser4">
                <div class="kelola-user8">
                    <p class="kelola-kategori-panorama4">Kelola User</p>
                </div>
                <img class="users-1-icon4" alt="" src="<?= base_url() ?>/css/public/users-1@2x.png" />
            </div>
            <div class="back8" id="frameContainer">
                <img class="back-child1" alt="" src="<?= base_url() ?>/css/public/rectangle-18.svg" />
                <script>
                    var frameContainer = document.getElementById("frameContainer");
                    if (frameContainer) {
                        frameContainer.addEventListener("click", function(e) {
                            window.location.href = "/superkpanorama";
                        });
                    }
                </script>
                <div class="back9">Back</div>
            </div>
        </div>
    </div>
    <div class="upload-your-file">Upload Your file here</div>
    <div class="ubah">
        <img class="ubah-child" alt="" src="<?= base_url() ?>/css/public/rectangle-17.svg" />

        <div class="ubah1">Ubah</div>
    </div>
    <div class="form">
        <div class="id-foto">
            <div class="id-foto-child"></div>
            <div class="id-foto1">id_foto</div>
        </div>
        <div class="gedung">
            <div class="id-foto-child"></div>
            <div class="gedung1">
                <p class="edit-kategori-panorama">Gedung</p>
            </div>
        </div>
        <div class="ruang">
            <div class="ruang-child"></div>
            <div class="ruang1">Ruang</div>
        </div>
        <div class="ruang2">
            <div class="id-foto-child"></div>
            <div class="choose-file">Choose File</div>
        </div>
    </div>
    </div>
</body>

</html>

<?= $this->endSection(); ?>