const alert = document.getElementById("alert");
if (alert !== null) {
    alert.addEventListener("click", function () {
        alert.classList.replace("animate__flipInY", "animate__fadeOutRight");
    });

    setTimeout(() => {
        alert.classList.replace("animate__flipInY", "animate__fadeOutRight");
    }, 4000);
}
