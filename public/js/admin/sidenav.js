const sidenav = document.getElementById("sidenav");
const main = document.getElementById("main");
const closeButton = document.getElementById("closeButton");
const hamburger = document.getElementById("hamburger");

closeButton.addEventListener("click", function () {
    sidenav.classList.replace("left-0", "-left-full");
    sidenav.classList.replace("duration-500", "duration-1000");
    main.classList.replace("ml-64", "ml-0");
    main.classList.replace("mt-28", "mt-32");
    setTimeout(() => {
        hamburger.classList.replace("-left-10", "left-10");
    }, 200);
});

hamburger.addEventListener("click", function () {
    sidenav.classList.replace("-left-full", "left-0");
    sidenav.classList.replace("duration-1000", "duration-500");
    main.classList.replace("ml-0", "ml-64");
    main.classList.replace("mt-32", "mt-28");
    hamburger.classList.replace("left-10", "-left-10");
});
