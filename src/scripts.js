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

  // const sidebarIcon = document.querySelectorAll(".sidebar_icon");
  // const sidebarToggle = document.querySelectorAll(".sidebar_toggle");

  // sidebarIcon.forEach(function (icon, index) {
  //   icon.addEventListener("click", function () {
  //     sidebarToggle.forEach(function (area) {
  //       area.classList.add("hidden");
  //     });

  //     // Show the corresponding area
  //     const associatedArea = document.getElementById(`sidebar${index + 1}`);
  //     if (associatedArea) {
  //       associatedArea.classList.remove("hidden");
  //     }
  //   });
  // });

  // add an icon when menu has children or sub menu
  let parentItems = document.querySelectorAll("li.menu-item-has-children");

  parentItems.forEach(function (parentItem) {
    let menu_icon = document.createElement("i");
    menu_icon.className = "fa-solid fa-caret-right";

    // Get the first child of parentItem
    let firstChild = parentItem.firstChild;

    // Insert menu_icon just after the first child
    parentItem.insertBefore(menu_icon, firstChild.nextSibling);
  });
});
