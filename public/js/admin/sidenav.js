const sidenav = document.getElementById("sidenav");
const main = document.getElementById("main");
const closeButton = document.getElementById("closeButton");
const hamburger = document.getElementById("hamburger");

closeButton.addEventListener("click", function () {
    sidenav.classList.replace("-ml-0", "-ml-64");
    main.classList.replace("ml-64", "ml-0");
    main.classList.replace("mt-28", "mt-32");
    setTimeout(() => {
        hamburger.classList.replace("ml-0", "ml-12");
    }, 200);
});

hamburger.addEventListener("click", function () {
    sidenav.classList.replace("-ml-64", "-ml-0");
    main.classList.replace("ml-0", "ml-64");
    main.classList.replace("mt-32", "mt-28");
    hamburger.classList.replace("ml-12", "ml-0");
});
