/**
 * Header - Start
 */
function openMenu(mainMenuItems) {
  mainMenuItems.classList.add("open");
}

function closeMenu(mainMenuItems) {
  mainMenuItems.classList.remove("open");
}

document.addEventListener("DOMContentLoaded", function () {
  let mainMenuButtonOpen = document.querySelector(".main-menu-button-open");

  let mainMenuButtonClose = document.querySelector(".main-menu-button-close");

  let mainMenuItems = document.querySelector(".main-menu-mobile-items");

  mainMenuButtonOpen.addEventListener("click", function () {
    openMenu(mainMenuItems);
  });

  mainMenuButtonClose.addEventListener("click", function () {
    closeMenu(mainMenuItems);
  });
});

/**
 * Header - End
 */
