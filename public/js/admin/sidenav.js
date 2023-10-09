const sidenav = document.getElementById("sidenav");
const main = document.getElementById("main");
const closeButton = document.getElementById("closeButton");
const hamburger = document.getElementById("hamburger");

closeButton.addEventListener("click", function () {
    sidenav.classList.replace("-ml-0", "-ml-80");
    main.classList.replace("lg:ml-80", "lg:ml-0");
    main.classList.replace("mt-28", "mt-32");
});

hamburger.addEventListener("click", function () {
    sidenav.classList.replace("-ml-80", "-ml-0");
    main.classList.replace("lg:ml-0", "lg:ml-80");
    main.classList.replace("mt-32", "mt-28");
});
