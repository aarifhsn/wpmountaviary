document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuButton = document.getElementById("mobile-menu");
  const navList = document.querySelector(".nav-list");

  mobileMenuButton.addEventListener("click", function (event) {
    if (!navList.contains(event.target)) {
      navList.classList.toggle("show");
      mobileMenuButton.classList.toggle("active");
    }
  });
});
