const hamburgerButton = () => {
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navPopUp");
    const hamburgerLine1 = hamburger.firstElementChild;
    const hamburgerLine2 = hamburger.children[1];
    const hamburgerLine3 = hamburger.lastElementChild;
    hamburgerLine2.classList.toggle("scale-0");
    navMenu.classList.toggle("scale-0");
    hamburger.classList.toggle("translate-x-1");

    if (hamburgerLine1.classList.contains("rotate-0")) {
        hamburgerLine1.classList.replace("rotate-0", "rotate-45");
        hamburgerLine1.classList.replace("-translate-y-0", "-translate-y-1");
        hamburgerLine3.classList.replace("-rotate-0", "-rotate-45");
        hamburgerLine3.classList.replace("translate-y-0", "translate-y-0");
    } else {
        hamburgerLine1.classList.replace("rotate-45", "rotate-0");
        hamburgerLine1.classList.replace("-translate-y-1", "-translate-y-0");
        hamburgerLine3.classList.replace("-rotate-45", "-rotate-0");
        hamburgerLine3.classList.replace("translate-y-0", "translate-y-0");
    }
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

// document.addEventListener('click', (e) => {
//     if (!popup.contains(e.target) && e.target !== openButton) {
//       closePopup();
//     }
// });
