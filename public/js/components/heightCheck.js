const checkBodySize = () => {
    const bodyHeight = document.body.clientHeight;
    const windowHeight = window.innerHeight;
    const footer = document.getElementById("footer");
    console.log("cek tinggi ...");

    if (bodyHeight <= windowHeight) {
        console.log("footer fixed");
        footer.classList.replace("relative", "fixed");
        footer.classList.add("bottom-0");
    } else {
        console.log("footer relatif");
        footer.classList.replace("fixed", "relative");
        footer.classList.remove("bottom-0");
    }
};

checkBodySize();

window.addEventListener("resize", checkBodySize);
