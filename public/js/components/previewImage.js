const previewImage = () => {
    const image = document.getElementById("foto");
    const imagePreview = document.getElementById("imagePreview");

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = (oFREvent) => {
        imagePreview.src = oFREvent.target.result;
    };
};
