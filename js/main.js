const panoramaImage = new PANOLENS.ImagePanorama("<?= base_url() ?>/coba.jpg");
const imageContainer = document.querySelector(".image-container");

const viewer = new PANOLENS.Viewer({
    container: imageContainer,
});

viewer.add()