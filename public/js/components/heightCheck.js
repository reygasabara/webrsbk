const bodyHeight = document.body.clientHeight;
const windowHeight = window.innerHeight;

if (bodyHeight < windowHeight) {
    const footer = document.getElementById("footer");
    footer.classList.replace("relative", "fixed");
    footer.classList.add("bottom-0", "right-0", "left-0");
}
