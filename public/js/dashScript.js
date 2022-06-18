const dToggle = document.querySelector(".dashboard-menu > span");
// const dPhar = document.querySelectorAll(".dashboard-items > a > p");
const dMenu = document.querySelector(".dashboard-menu");
const dLogo = document.querySelector(".dashboard-logo");
const dContent = document.querySelector(".dashboard-content");
const dUser = document.querySelector(".dashboard-ribbon > button");
const dUserItem = document.querySelector(".dashboard-user");

// DOM MANIPULATION
dToggle.addEventListener("click", function () {
  // for (let i = 0; i < dPhar.length; i++) {
  //   const data = dPhar[i];
  //   data.classList.toggle("d-hidden");
  // }
  dMenu.classList.toggle("d-size");
  dUserItem.classList.remove("d-restore");
});

dUser.addEventListener("click", function () {
  dUserItem.classList.toggle("d-restore");
  dMenu.classList.add("d-size");
});
dContent.addEventListener("click", function () {
  dMenu.classList.add("d-size");
  if (dUserItem.classList.contains("d-restore")) {
    dUserItem.classList.remove("d-restore");
  }
});
