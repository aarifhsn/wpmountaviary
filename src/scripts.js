document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuButton = document.getElementById("mobile-menu");
  const navList = document.querySelector(".mount_top_mobile_menu ul");

  mobileMenuButton.addEventListener("click", function (event) {
    event.stopPropagation(); // Stop propagation to prevent document click listener from firing
    navList.classList.toggle("show");
    mobileMenuButton.classList.toggle("active");
  });

  document.addEventListener("click", function (event) {
    if (!navList.contains(event.target) && event.target !== mobileMenuButton) {
      navList.classList.remove("show");
      mobileMenuButton.classList.remove("active");
    }
  });

  // add an icon when menu has children or sub menu
  // all pages except custom front page (for header)
  let menuItems = document.querySelectorAll("ul li.menu-item-has-children");
  console.log(menuItems);

  menuItems.forEach(function (menu_list) {
    let menu_icon_page = document.createElement("i");
    menu_icon_page.className = "fa-solid fa-caret-down";

    // Get the first child of menu_list
    let firstChild = menu_list.firstChild;

    // Insert menu_icon_page just after the first child
    menu_list.insertBefore(menu_icon_page, firstChild.nextSibling);
  });
});
