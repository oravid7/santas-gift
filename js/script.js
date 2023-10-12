function toggleMenu() {
  var mainNav = document.querySelector(".main-nav");
  mainNav.classList.toggle("hidden");
}

function toggleNav(navId, event) {
  var expandedNavs = document.querySelectorAll(".expanded-nav");
  expandedNavs.forEach(function (nav) {
    nav.classList.add("hidden"); // Hide all navs
  });
  var selectedNav = document.getElementById(navId);
  selectedNav.style.top =
    event.target.offsetTop + event.target.offsetHeight + "px"; // Set top position dynamically
  selectedNav.classList.toggle("hidden"); // Toggle the visibility of the clicked nav
}

window.addEventListener("resize", function () {
  var width = window.innerWidth;
  var mainNav = document.querySelector(".main-nav");
  var menuToggle = document.querySelector(".menu-toggle");

  if (width > 768) {
    mainNav.classList.remove("hidden");
    menuToggle.classList.add("hidden");
  } else {
    mainNav.classList.add("hidden");
    menuToggle.classList.remove("hidden");
  }
});

document.addEventListener("click", function (event) {
  // Check if the clicked target is not a carousel button
  if (event.target !== nextBtn && event.target !== prevBtn) {
    var isClickInsideNav = document.querySelector("nav").contains(event.target);
    var expandedNav = document.querySelector(".expanded-nav:not(.hidden)");
    var isClickInsideExpandedNav =
      expandedNav && expandedNav.contains(event.target);

    if (!isClickInsideNav && !isClickInsideExpandedNav) {
      var expandedNavs = document.querySelectorAll(".expanded-nav");
      expandedNavs.forEach(function (nav) {
        nav.classList.add("hidden"); // Hide all navs
      });
    }
  }
});

window.addEventListener("DOMContentLoaded", (event) => {
  setInitialNavVisibility();

  function setInitialNavVisibility() {
    var width = window.innerWidth;
    var mainNav = document.querySelector(".main-nav");
    var menuToggle = document.querySelector(".menu-toggle");

    if (width > 768) {
      mainNav.classList.remove("hidden");
      menuToggle.classList.add("hidden");
    } else {
      mainNav.classList.add("hidden");
      menuToggle.classList.remove("hidden");
    }
  }
});

const btnNavEL = document.querySelector(".btn-mobile-nav");
const headerEL = document.querySelector(".header");

btnNavEL.addEventListener("click", function () {
  headerEL.classList.toggle("nav-open");
});
