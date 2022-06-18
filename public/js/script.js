const menuItems = document.querySelector(".nav-menu");
const menutoggle = document.querySelector(".nav-toggle");

// DOM MANIPULATION
menutoggle.addEventListener("click", function () {
  menuItems.classList.toggle("nav-restore");
});
menuItems.addEventListener("click", function () {
  menuItems.classList.remove("nav-restore");
  document.querySelector(".nav-toggle > input").checked = false;
});
