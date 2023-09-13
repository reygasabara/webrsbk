const image = document.getElementById("foto");
const description = document.getElementById("descriptionContainer");
const imagePreview = document.getElementById("imagePreview");

const previewImage = () => {
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = (oFREvent) => {
        imagePreview.src = oFREvent.target.result;
    };
};

const changePhoto = () => {
    files = image.files;

    if (files.length > 0) {
        description.classList.remove("hidden");
    } else {
        description.classList.add("hidden");
    }
};

image.addEventListener("change", function () {
    changePhoto();
});

if (imagePreview.naturalWidth > 0) {
    description.classList.remove("hidden");
}
