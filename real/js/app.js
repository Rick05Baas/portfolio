const filter_btns = document.querySelectorAll(".filter-btn");
const footer_input = document.querySelector(".footer-input");
const hamburger_menu = document.querySelector(".hamburger-menu");
const navbar = document.querySelector("header nav");
const links = document.querySelectorAll(".links a");




// ----------------------------------------------------------------------


function myFunction() {
  window.alert("hallo wereld");
}



function closeMenu() {
  navbar.classList.remove("open");
  document.body.classList.remove("stop-scrolling");
}


hamburger_menu.addEventListener('click', () => {
  // window.alert('gelukt!');

  if (!navbar.classList.contains("open")) {
        navbar.classList.add("open");
        document.body.classList.add("stop-scrolling");
      } else {
        closeMenu();
      }
});


links.forEach((link) => link.addEventListener("click", () => closeMenu()));

// ----------------------------------------------------------------------
