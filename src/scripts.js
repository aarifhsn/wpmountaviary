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
  let parentItems = document.querySelectorAll(
    ".left_nav li.menu-item-has-children"
  );

  parentItems.forEach(function (parentItem) {
    let menu_icon = document.createElement("i");
    menu_icon.className = "fa-solid fa-caret-right";

    // Get the first child of parentItem
    let firstChild = parentItem.firstChild;

    // Insert menu_icon just after the first child
    parentItem.insertBefore(menu_icon, firstChild.nextSibling);
  });

  // add an icon when menu has children or sub menu
  let menuItems = document.querySelectorAll(
    ".menu_lists li.menu-item-has-children"
  );

  menuItems.forEach(function (menu_list) {
    let menu_icon = document.createElement("i");
    menu_icon.className = "fa-solid fa-caret-down";

    // Get the first child of menu_list
    let firstChild = menu_list.firstChild;

    // Insert menu_icon just after the first child
    menu_list.insertBefore(menu_icon, firstChild.nextSibling);
  });
});
