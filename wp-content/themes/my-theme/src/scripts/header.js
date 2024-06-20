document.addEventListener("DOMContentLoaded", function () {
  // open mobile menu
  const openMenuBtn = document.getElementById("js-open-menu");
  const closeMenuBtn = document.getElementById("js-close-menu");
  const mobileMenuEl = document.getElementById("js-mobile-menu");
  const panelEL = document.querySelector(".sub-menu");

  openMenuBtn.addEventListener("click", openMenu);
  closeMenuBtn.addEventListener("click", closeMenu);
  mobileMenuEl.addEventListener("click", closeMenubyBgdClick);

  function openMenu() {
    mobileMenuEl.classList.remove("hidden");
    openMenuBtn.classList.add("hidden");
    closeMenuBtn.classList.remove("hidden");
    document.body.classList.add("modal-open");
  }

  function closeMenu() {
    mobileMenuEl.classList.add("hidden");
    openMenuBtn.classList.remove("hidden");
    closeMenuBtn.classList.add("hidden");
    document.body.classList.remove("modal-open");
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
