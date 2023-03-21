function menuconfig() {

    let menu_config = document.querySelector('#menuconfig');

    if (menu_config.style.display == "flex") {
        menu_config.style.display = "none";

    } else {
        menu_config.style.display = "flex";

    }

}