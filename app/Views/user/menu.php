<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/menu.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
    <style>
       

        .floating-bubble {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .kategori-child:hover+.floating-bubble {
            display: block;
        }
    </style>
</head>

<body>
    <div class="menu">
        <img class="politeknik-subang-1-icon" alt="" src="<?= base_url() ?>/css/public/politekniksubang-1@2x.png" />

        <img class="image-1-icon1" alt="" src="<?= base_url() ?>/css/public/image-11@2x.png" />

        <div class="virtual-tour-360-container">
            <p class="politeknik-negeri-subang">VIRTUAL TOUR 360 KAMPUS</p>
            <p class="politeknik-negeri-subang">POLITEKNIK NEGERI SUBANG</p>
        </div>
        <div class="menu-child"></div>
        <div class="component-1">
            <img class="indonesia-map-png-1-icon1" alt="" src="<?= base_url() ?>/css/public/3753751168-indonesiamappng-111@2x.png" />
        </div>
        <div class="kategori">
            <div class="kategori-child"></div>
            <div class="floating-bubble" id="floatingBubble"> Kategori Panorama yaitu Temen temen dapat melihat
                <br>Gedung dan Ruangan Politeknik Negeri Subang secara 360 Derajat.
            </div>
            <div class="kategori-panorama">Kategori Panorama</div>
            <div class="button" id="frameContainer">
                <button class="button-like">
                    <div class="button-child"></div>
                    <div class="go">GO!</div>
            </div>
            <img class="whatsapp-image-2023-05-19-at-1" alt="" src="<?= base_url() ?>/css/public/whatsapp-image-20230519-at-1723-1@2x.png" />
        </div>
        <div class="minimap">
            <div class="kategori-child"></div>
            <div class="minimap-panorama">Minimap Panorama</div>

            <img class="image-10-icon" alt="" src="<?= base_url() ?>/css/public/image-10@2x.png" />

            <div class="button1" id="frameContainer1">
                <button class="button-like">
                    <script>
                        var frameContainer1 = document.getElementById("frameContainer1");
                        if (frameContainer1) {
                            frameContainer1.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('user/minimap') ?>";
                            });
                        }
                    </script>
                    <div class="button-child"></div>
                    <div class="go">GO!</div>
            </div>
        </div>
    </div>
    <img class="sound6972-removebg-preview-1-icon" alt="" src="<?= base_url() ?>/css/public/sound6972removebgpreview-1@2x.png" />
    <img class="img-0011-icon" alt="" src="<?= base_url() ?>/css/public/menu.png" onclick="playHelloSound()" />
    <audio id="hello-audio">
        <source src="<?= base_url() ?>/css/public/menu.mpeg" type="audio/mpeg">
    </audio>
    <div class="bubble">
        <p>Let's go!</p>
    </div>
    <script>
        var audio = document.getElementById('hello-audio');
        var bubble = document.querySelector('.bubble');

        // Memunculkan bubble dan memainkan suara
        function playHelloSound() {
            audio.play();
            bubble.style.opacity = 1;
        }

        // Menghilangkan bubble setelah suara selesai
        function hideBubble() {
            bubble.style.opacity = 0;
        }

        // Mendengarkan klik pada gambar untuk memunculkan bubble dan memainkan suara
        var imgIcon = document.querySelector('.img-0011-icon');
        imgIcon.addEventListener('click', playHelloSound);

        // Mendengarkan peristiwa akhir audio untuk menyembunyikan bubble
        audio.addEventListener('ended', hideBubble);
    </script>

    <script>
        // Menampilkan bubble
        function showBubble() {
            var bubble = document.querySelector('.bubble');
            bubble.style.opacity = 1;
        }

        // Mendengarkan klik pada gambar untuk memunculkan bubble
        var imgIcon = document.querySelector('.img-0011-icon');
        imgIcon.addEventListener('click', showBubble);
    </script>

    <script>
        var frameContainer = document.getElementById("frameContainer");
        if (frameContainer) {
            frameContainer.addEventListener("click", function(e) {
                window.location.href = "<?= base_url('user/kategori') ?>";
            });
        }
    </script>

</body>

</html>


<?= $this->endSection(); ?>