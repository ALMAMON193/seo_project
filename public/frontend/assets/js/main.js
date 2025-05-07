const mobileMenuIcon = document.querySelector(".mobile-menu-icon");
const navLinks = document.querySelector(".og-navlink-content");

mobileMenuIcon.addEventListener("click", () => {
  navLinks.classList.toggle("active_nav");
});

/**
 * ==============================================================================================
 *  Dropdown menu functionality: Show the dropdown menu on mouse enter and hide it on mouse leave
 * ==============================================================================================
*/
const ogDropdown = document.querySelector('.og-dropdown');
const ogDropdownMenu = document.getElementById('og-dropdownMenu');
const ogMobileDropdown = document.getElementById("dropdown-icon");

ogMobileDropdown.addEventListener("click", function () {
  ogDropdownMenu.classList.toggle("open");
});

ogDropdown.addEventListener('mouseenter', function () {
  ogDropdownMenu.style.display = 'block'; // Show the dropdown menu
});

ogDropdown.addEventListener('mouseleave', function () {
  ogDropdownMenu.style.display = 'none'; // Hide the dropdown menu
});
/**
 * ====
 * END
 * ====
*/
