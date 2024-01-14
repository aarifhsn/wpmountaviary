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

  // MENU- ADD ICON IN LI (PARENT) IF SUMENU CLASS EXISTS

  // Get all parent elements with a class of "parent"
  var parentItems = document.querySelectorAll("li.menu-item");

  // Loop through each parent element
  parentItems.forEach(function (parentItem) {
    // Check if the parent has a submenu (ul element)
    var submenu = parentItem.querySelector("ul.sub-menu");

    if (submenu) {
      // Add a class to the parent if a submenu exists
      let menu_icon = document.createElement("i");
      menu_icon.className = "fa-solid fa-chevron-down";
      parentItem.appendChild(menu_icon);
    }
  });
});
