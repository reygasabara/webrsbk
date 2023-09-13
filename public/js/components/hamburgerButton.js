const hamburgerButton = () => {
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navPopUp");
    const hamburgerLine1 = hamburger.firstElementChild;
    console.log(hamburgerLine1);
    const hamburgerLine2 = hamburger.children[1];
    const hamburgerLine3 = hamburger.lastElementChild;
    hamburgerLine1.classList.toggle("rotate-45");
    hamburgerLine1.classList.toggle("-translate-y-1");
    hamburgerLine2.classList.toggle("scale-0");
    hamburgerLine3.classList.toggle("-rotate-45");
    hamburgerLine3.classList.toggle("translate-y-[1.4px]");
    navMenu.classList.toggle("scale-0");
};

const showSubmenu = (element) => {
    const activeSubmenu = element.nextElementSibling;
    activeSubmenu.classList.toggle("py-3");
    activeSubmenu.classList.toggle("h-0");

    const submenus = document.getElementsByClassName("submenu");

    for (const submenu of submenus) {
        if (submenu === activeSubmenu) {
            continue;
        }

        if (submenu.classList.contains("py-3")) {
            submenu.classList.toggle("py-3");
            submenu.classList.toggle("h-0");
        }
    }
};
