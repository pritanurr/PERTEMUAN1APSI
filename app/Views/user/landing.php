<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/landing.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />

    <style>
        .floating-bubble {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            text-align: center;
            border-radius: 30px;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .floating-bubble.show {
            opacity: 1;
        }
    </style>
</head>

<body onload="playHelloSound()">
    <div class="frame">
        <img class="politeknik-subang-1-icon" alt="" src="<?= base_url() ?>/css/public/politekniksubang-1@2x.png" />

        <div class="atas">
            <img class="image-1-icon1" alt="" src="<?= base_url() ?>/css/public/image-11@2x.png" />

            <div class="virtual-tour-360-container">
                <p class="politeknik-negeri-subang">VIRTUAL TOUR 360 KAMPUS</p>
                <p class="politeknik-negeri-subang">POLITEKNIK NEGERI SUBANG</p>
            </div>
        </div>
        <div class="frame-child"></div>
        <img class="sound6972-removebg-preview-1-icon" alt="" src="<?= base_url() ?>/css/public/sound6972removebgpreview-1@2x.png" />
        <img class="img-0014-icon" alt="" src="<?= base_url() ?>/css/public/halo.png" onclick="playHelloSound()" />
        <audio id="hello-audio" autoplay>
            <div id="subtitle"></div>
            <source src="<?= base_url() ?>/css/public/1.mpeg" type="audio/mpeg">
        </audio>

        <div class="floating-bubble" id="floatingBubble">Hallo, kenalin aku Prita, sebagai teman jelajah kalian:)!
            <br>Selamat datang di Virtual Tour Kampus Politeknik Negeri Subang. Mari kita berjelajah.
        </div>
        <script type="text/javascript">
            window.onload = playHelloSound();

            function playHelloSound() {
                var audio = document.getElementById('hello-audio');
                audio.play();
            }

            function showFloatingBubble() {
                var floatingBubble = document.getElementById("floatingBubble");
                floatingBubble.classList.add("show");
                setTimeout(function() {
                    floatingBubble.classList.remove("show");
                }, 5000); // Menghilangkan bubble setelah 5 detik
            }

            var img0014 = document.querySelector(".img-0014-icon");
            if (img0014) {
                img0014.addEventListener("click", function() {
                    showFloatingBubble();
                });
            }
        </script>
        </script>

        <div class="mulai-wrapper" id="frameContainer">
            <button class="button-like">
                <div class="mulai" id="mulaiButton">Mulai!</div>
        </div>
        <div class="bubble-question" id="bubbleQuestion" style="display: none;">
            <form action="<?= base_url('user/save') ?>" method="post">
                <p class="question"> Apa Status anda?</p>
                <div class="options">
                    <button type="button" onclick="sendAgeRange('Mahasiswa')">Mahasiswa</button>
                    <button type="button" onclick="sendAgeRange('Pelajar')">Pelajar</button>
                    <button type="button" onclick="sendAgeRange('Pekerja')">Pekerja</button>
                </div>
            </form>
        </div>
        <script>
            // Event listener for "Mulai" button click
            var mulaiButton = document.getElementById("mulaiButton");
            if (mulaiButton) {
                mulaiButton.addEventListener("click", function(e) {
                    showBubbleQuestion();
                });
            }

            // Function to show the bubble question
            function showBubbleQuestion() {
                var bubbleQuestion = document.getElementById("bubbleQuestion");
                bubbleQuestion.style.display = "block";
            }

            // Function to send age range to the server
            function sendAgeRange(ageRange) {
                // Check if geolocation is available
                if ('geolocation' in navigator) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var userLat = position.coords.latitude;
                        var userLng = position.coords.longitude;

                        // Send the age range and user location to the server
                        sendUserData(ageRange, userLat, userLng);
                    });
                } else {
                    // Send the age range without user location to the server
                    sendUserData(ageRange, null, null);
                }
            }

            // Function to send user data to the server
            function sendUserData(ageRange, lat, lng) {
                var form = document.querySelector("form");
                var ageRangeInput = document.createElement("input");
                ageRangeInput.type = "hidden";
                ageRangeInput.name = "age_range";
                ageRangeInput.value = ageRange;
                form.appendChild(ageRangeInput);

                if (lat && lng) {
                    var latInput = document.createElement("input");
                    latInput.type = "hidden";
                    latInput.name = "latitude";
                    latInput.value = lat;
                    form.appendChild(latInput);

                    var lngInput = document.createElement("input");
                    lngInput.type = "hidden";
                    lngInput.name = "longitude";
                    lngInput.value = lng;
                    form.appendChild(lngInput);
                }

                form.submit();
            }
        </script>
    </div>
</body>

</html>

<?= $this->endSection(); ?>