<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/css/global.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/css/map.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <title>maps</title>
</head>

<body>

    <div style="text-align:center;padding: 10px">
        <a rel="noopener noreferer" target="_blank" href="https://www.youtube.com/watch?v=fatkHtYcm8k">Go To Youtube Video Ver</a>
    </div>

    <div class="wrapper">
        <div class="map">
            <input class="search-location" type="text" placeholder="search location here..." oninput="onTyping(this)">
            <ul id="search-result">
                <!-- <li>
        <a href="#">result 1</a>
      </li> -->
            </ul>
        </div>
        <div id="render-map"></div>
    </div>

    <script>
        const DEFAULT_COORD = [-6.1752804, 106.8252699];
        const resultsWrapperHTML = document.getElementById("search-result");

        // initial map
        const Map = L.map("render-map");

        // initial osm tile url
        const osmTileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

        const attrib = 'Leaflet with <a href="https://academy.byidmore.com">Id More Academy<a>';

        const osmTile = new L.TileLayer(osmTileUrl, {
            minZoom: 2,
            maxZoom: 20,
            attribution: attrib
        });

        // add layer 
        // https://leafletjs.com/reference-1.6.0.html#layer
        Map.setView(new L.LatLng(DEFAULT_COORD[0], DEFAULT_COORD[1]), 15);
        Map.addLayer(osmTile);

        // add marker
        // https://leafletjs.com/reference-1.6.0.html#marker
        const Marker = L.marker(DEFAULT_COORD).addTo(Map);

        // click listener
        // https://leafletjs.com/reference-1.6.0.html#evented
        Map.on("click", function(e) {
            const {
                lat,
                lng
            } = e.latlng;
            // regenerate marker position
            Marker.setLatLng([lat, lng]);
        });

        // search location handler
        let typingInterval;

        // typing handler
        function onTyping(e) {
            clearInterval(typingInterval);
            const {
                value
            } = e;

            typingInterval = setInterval(() => {
                clearInterval(typingInterval);
                searchLocation(value);
            }, 500);
        }

        // search handler
        function searchLocation(keyword) {
            if (keyword) {
                // request to nominatim api
                fetch(`https://nominatim.openstreetmap.org/search?q=${keyword}&format=json`)
                    .then((response) => {
                        return response.json();
                    }).then(json => {
                        // get response data from nominatim
                        console.log("json", json);
                        if (json.length > 0) return renderResults(json);
                        else alert("lokasi tidak ditemukan");
                    });
            }
        }

        // render results
        function renderResults(result) {
            let resultsHTML = "";

            result.map((n) => {
                resultsHTML += `<li><a href="#" onclick="setLocation(${n.lat},${n.lon})">${n.display_name}</a></li>`;
            });

            resultsWrapperHTML.innerHTML = resultsHTML;
        }

        // clear results
        function clearResults() {
            resultsWrapperHTML.innerHTML = "";
        }

        // set location from search result
        function setLocation(lat, lon) {
            // set map focus
            Map.setView(new L.LatLng(lat, lon), 15);

            // regenerate marker position
            Marker.setLatLng([lat, lon]);

            // clear results
            clearResults();
        }
    </script>
</body>

</html>