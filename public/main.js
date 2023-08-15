const panoramaImage = new PANOLENS.ImagePanorama("public/css/public/pano.jpg");
const imageContainer = document.querySelector(".image-container");

const viewer = new PANOLENS.Viewer({
    container: imageContainer,
});

viewer.add()