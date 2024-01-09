document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuButton = document.getElementById("mobile-menu");
  const navList = document.querySelector(".nav-list");

  mobileMenuButton.addEventListener("click", function (event) {
    if (!navList.contains(event.target)) {
      navList.classList.toggle("show");
      mobileMenuButton.classList.toggle("active");
    }
  });

  // Menu and Sidebar Toggle

  const sidebarIcon = document.querySelectorAll(".sidebar_icon");
  const sidebarToggle = document.querySelectorAll(".sidebar_toggle");

  sidebarIcon.forEach(function (icon, index) {
    icon.addEventListener("click", function () {
      sidebarToggle.forEach(function (area) {
        area.classList.add("hidden");
      });

      // Show the corresponding area
      const associatedArea = document.getElementById(`sidebar${index + 1}`);
      if (associatedArea) {
        associatedArea.classList.remove("hidden");
      }
    });
  });
});
