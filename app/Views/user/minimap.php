<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <base target="_top">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MINIMAP PANORAMA</title>

    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            height: 400px;
            width: 600px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/minimap.css" />

</head>

<body onload="playHelloSound()">

    <img class="img-0011-icon" alt="" src="<?= base_url() ?>/css/public/minimap.png" onclick="playHelloSound()" />
    <img class="sound6972-removebg-preview-1-icon" alt="" src="<?= base_url() ?>/css/public/sound6972removebgpreview-1@2x.png" />
    <audio id="hello-audio">
        <source src="<?= base_url() ?>/css/public/minimap.mpeg" type="audio/mpeg">
    </audio>
    <script type="text/javascript">
        function playHelloSound() {
            var audio = document.getElementById('hello-audio');
            audio.play();
        }
        window.addEventListener('load', playHelloSound);
    </script>
    <div id="map" style="width: 900px; height: 500px;"></div>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const map = L.map('map');

            const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            L.Routing.control({
                waypoints: [
                    L.latLng(-6.566361, 107.827444),
                    L.latLng(-6.565861, 107.827876)
                ]
            }).addTo(map);

            const marker = L.marker([-6.565861, 107.827876]).addTo(map)
                .bindPopup('<b>Politeknik Negeri Subang!</b><br />I am a popup.').openPopup();

            const currentLocation = L.marker([-6.566361, 107.827444]).addTo(map)
                .bindPopup('<b>Ini Lokasi Anda Sekarang!</b>').openPopup();
        });
    </script>
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

            <div class="back"><b>Back</div>
    </div>

</body>

</html>

<?= $this->endSection(); ?>