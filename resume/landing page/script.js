function toggleMenu() {
    const navMenu = document.getElementById("nav-Menu");
    if (navMenu.style.display === "flex") {
        navMenu.style.display = "none";
    } else {
        navMenu.style.display = "flex";
        navMenu.style.flexDirection = "column";
        navMenu.style.alignItems = "center";
    }
}