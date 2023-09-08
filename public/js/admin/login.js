const eye = document.getElementById("eye");
const eyeSlash = document.getElementById("eyeSlash");
const password = document.getElementById("password");

eye.addEventListener("click", function () {
    eye.classList.replace("opacity-100", "opacity-0");
    eyeSlash.classList.replace("opacity-0", "opacity-100");
    eye.classList.replace("right-3", "-right-5");
    eyeSlash.classList.replace("-right-5", "right-3");
    password.setAttribute("type", "text");
});

eyeSlash.addEventListener("click", function () {
    eye.classList.replace("opacity-0", "opacity-100");
    eyeSlash.classList.replace("opacity-100", "opacity-0");
    eye.classList.replace("-right-5", "right-3");
    eyeSlash.classList.replace("right-3", "-right-5");
    password.setAttribute("type", "password");
});
