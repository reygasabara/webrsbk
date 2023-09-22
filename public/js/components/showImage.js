const screenWidth =
    window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;

const mobileScreenWidth = 768;
if (screenWidth > mobileScreenWidth) {
    const image = document.getElementById("image");
    const imageCaption = document.getElementById("imageCaption");
    imageWidth = image.naturalWidth;
    imageCaption.style.width = `${imageWidth}px`;
}
