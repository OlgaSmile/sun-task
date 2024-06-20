document.addEventListener("DOMContentLoaded", function () {
  // open mobile menu
  const openMenuBtn = document.getElementById("js-open-menu");
  const closeMenuBtn = document.getElementById("js-close-menu");
  const mobileBackdropEl = document.getElementById("js-mobile-backdrop");
  const panelEL = document.querySelector(".sub-menu");

  openMenuBtn.addEventListener("click", openMenu);

  function openMenu() {
    mobileBackdropEl.classList.remove("hidden");
    closeMenuBtn.classList.remove("hidden");
    openMenuBtn.classList.add("hidden");
    document.body.classList.add("modal-open");

    closeMenuBtn.addEventListener("click", closeMenu);
    mobileBackdropEl.addEventListener("click", closeMenubyBgdClick);
  }

  function closeMenu() {
    mobileBackdropEl.classList.add("hidden");
    closeMenuBtn.classList.add("hidden");
    openMenuBtn.classList.remove("hidden");
    document.body.classList.remove("modal-open");

    closeMenuBtn.removeEventListener("click", closeMenu);
    mobileBackdropEl.removeEventListener("click", closeMenubyBgdClick);
    panelEL.style.maxHeight = null;
  }

  function closeMenubyBgdClick(e) {
    if (e.currentTarget === e.target) {
      closeMenu();
    }
  }

  // open submenu
  const acc = document.querySelector(".menu-item-has-children");
  acc.addEventListener("click", function () {
    const panel = this.children[1];
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
});
