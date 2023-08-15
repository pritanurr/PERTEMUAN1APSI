<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/kategori.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body onload="playHelloSound()">
    <div class="kategori1">
        <img class="politeknik-subang-1-icon1" alt="" src="<?= base_url() ?>/css/public/politekniksubang-11@2x.png" />

        <img class="indonesia-map-png-1-icon2" alt="" src="<?= base_url() ?>/css/public/3753751168-indonesiamappng-11@2x.png" />

        <img class="image-1-icon2" alt="" src="<?= base_url() ?>/css/public/image-11@2x.png" />

        <div class="virtual-tour-360-container1">
            <p class="gedung">VIRTUAL TOUR 360 KAMPUS</p>
            <p class="gedung">POLITEKNIK NEGERI SUBANG</p>
        </div>

        <div class="kategori-inner">
            <div class="group-div" id="frameContainer">
                <button class="button-like">
                    <script>
                        var frameContainer = document.getElementById("frameContainer");
                        if (frameContainer) {
                            frameContainer.addEventListener("click", function(e) {
                                window.location.href = "<?= base_url('user/menu') ?>";
                            });
                        }
                    </script>
                    <div class="group-child1"></div>
                    <div class="back">Back</div>
            </div>
        </div>
        <div class="kategori-parent">
            <div class="slide-container">

                <script>
                    const slideContainer = document.querySelector('.slide-container');

                    slideContainer.addEventListener('animationend', () => {
                        const firstSlide = slideContainer.querySelector('.slide-item');
                        const clone = firstSlide.cloneNode(true);
                        slideContainer.appendChild(clone);
                        firstSlide.remove();

                        const currentSlide = slideContainer.querySelector('.slide-item');
                        if (currentSlide.classList.contains('kategori7')) {
                            slideContainer.style.animationPlayState = 'paused';
                            setTimeout(() => {
                                slideContainer.style.animationPlayState = 'running';
                            }, 0);
                        }
                    });
                </script>

                <div class="kategori2">
                    <div class="kategori-item"></div>
                    <div class="gedung-tppm">Gedung <br>TPPM</div>

                    <img class="image-4-icon" alt="" src="<?= base_url() ?>/css/public/image-4@2x.png" />

                    <div class="component-2" id="tppmContainer">
                        <button class="button-like">
                            <div class="component-2-child"></div>
                            <div class="jelajahi">Jelajahi </div>
                    </div>
                </div>
                <div class="kategori3">
                    <div class="kategori-item"></div>
                    <div class="gedung-agroindustri">Gedung Agroindustri</div>
                    <div class="component-21" id="agroContainer">
                        <button class="button-like">
                            <div class="component-2-child"></div>
                            <div class="jelajahi">Jelajahi </div>
                    </div>
                    <img class="image-5-icon" alt="" src="<?= base_url() ?>/css/public/image-5@2x.png" />
                </div>
                <div class="kategori4">
                    <div class="kategori-item"></div>
                    <div class="gedung-agroindustri">
                        <p class="gedung">Gedung</p>
                        <p class="gedung">JMI</p>
                    </div>
                    <div class="component-21" id="jmiContainer">
                        <button class="button-like">
                            <div class="component-2-child"></div>
                            <div class="jelajahi">Jelajahi </div>
                    </div>
                    <img class="image-6-icon" alt="" src="<?= base_url() ?>/css/public/image-6@2x.png" />
                </div>
                <div class="kategori5">
                    <div class="kategori-item"></div>
                    <div class="gedung-keperawatan">
                        <p class="gedung">Gedung</p>
                        <p class="keperawatan1">Keperawatan</p>
                    </div>
                    <div class="component-21" id="keperawatanContainer">
                        <button class="button-like">
                            <div class="component-2-child"></div>
                            <div class="jelajahi">Jelajahi </div>
                    </div>
                    <img class="image-6-icon" alt="" src="<?= base_url() ?>/css/public/image-7@2x.png" />
                </div>
                <div class="kategori6" id="GKB">
                    <button class="button-like">
                        <div class="kategori-item"></div>
                        <div class="gedung-rektorat">
                            <p class="gedung">Gedung</p>
                            <p class="gedung">Rektorat</p>
                        </div>
                        <div class="component-21">
                            <div class="component-2-child"></div>
                            <div class="jelajahi">Jelajahi </div>
                        </div>
                        <img class="image-8-icon" alt="" src="<?= base_url() ?>/css/public/image-8@2x.png" />
                </div>
                <div class="kategori7">
                    <div class="kategori-item"></div>
                    <div class="masjid">Masjid</div>
                    <div class="component-21">
                        <div class="component-2-child"></div>
                        <div class="jelajahi">Jelajahi </div>
                    </div>
                    <img class="image-9-icon" alt="" src="<?= base_url() ?>/css/public/image-9@2x.png" />
                </div>
            </div>
        </div>
    </div>
    <img class="sound6972-removebg-preview-1-icon" alt="" src="<?= base_url() ?>/css/public/sound6972removebgpreview-1@2x.png" />
    <img class="img-0004-icon" alt="" src="<?= base_url() ?>/css/public/animasi1.png" onclick="playHelloSound()" />
    <audio id="hello-audio">
        <source src="<?= base_url() ?>/css/public/kategori.mpeg" type="audio/mpeg">
    </audio>
    <script type="text/javascript">
        window.onload = playHelloSound();

        function playHelloSound() {
            var audio = document.getElementById('hello-audio');
            audio.play();
        }
    </script>
    <script>
        var backContainer = document.getElementById("backContainer");
        if (backContainer) {
            backtContainer.addEventListener("click", function(e) {
                window.location.href = "<?= base_url('user/menu') ?>";
            });
        }
        var tppmContainer = document.getElementById("tppmContainer");
        if (tppmContainer) {
            tppmContainer.addEventListener("click", function(e) {
                window.location.href = "<?= base_url('user/tppm') ?>";
            });
        }
        var agroContainer = document.getElementById("agroContainer");
        if (agroContainer) {
            agroContainer.addEventListener("click", function(e) {
                window.location.href = "<?= base_url('user/agroindustri') ?>";
            });
        }
        var jmiContainer = document.getElementById("jmiContainer");
        if (jmiContainer) {
            jmiContainer.addEventListener("click", function(e) {
                window.location.href = "<?= base_url('user/jmi') ?>";
            });
        }

        var keperawatanContainer = document.getElementById("keperawatanContainer");
        if (keperawatanContainer) {
            keperawatanContainer.addEventListener("click", function(e) {
                window.location.href = "<?= base_url('user/keperawatan') ?>";
            });
        }

        var GKB = document.getElementById("GKB");
        if (GKB) {
            GKB.addEventListener("click", function(e) {
                window.location.href = "<?= base_url('user/GKB') ?>";
            });
        }
    </script>
</body>

</html>



<?= $this->endSection(); ?>