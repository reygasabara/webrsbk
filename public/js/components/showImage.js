const screenWidth =
    window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;

// Mendefinisikan batas lebar di mana Anda menganggap perangkat sebagai ponsel
const mobileScreenWidth = 768;
if (screenWidth > mobileScreenWidth) {
    const image = document.getElementById("image");
    const imageCaption = document.getElementById("imageContainer");
    imageWidth = image.naturalWidth;
    imageCaption.style.width = `${imageWidth}px`;
}
