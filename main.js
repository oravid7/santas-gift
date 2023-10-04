document.addEventListener("DOMContentLoaded", (event) => {
  const inner = document.querySelector(".carousel-inner");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");
  const totalItems = document.querySelectorAll(".carousel-item").length;
  let currentTranslateX = 0;

  function updateItemWidth() {
    return document.querySelector(".carousel-item").clientWidth;
  }

  let itemWidth = updateItemWidth();

  window.addEventListener("resize", () => {
    itemWidth = updateItemWidth();
  });

  nextBtn.addEventListener("click", () => {
    if (Math.abs(currentTranslateX) < itemWidth * (totalItems - 1)) {
      currentTranslateX -= itemWidth;
      inner.style.transform = `translateX(${currentTranslateX}px)`;
    }
  });

  prevBtn.addEventListener("click", () => {
    if (currentTranslateX < 0) {
      currentTranslateX += itemWidth;
      inner.style.transform = `translateX(${currentTranslateX}px)`;
    }
  });
});

const inner = document.querySelector(".carousel-inner");
const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");
let itemWidth = document.querySelector(".carousel-item").clientWidth;
let isAutoScrolling = true;

window.addEventListener("resize", () => {
  itemWidth = document.querySelector(".carousel-item").clientWidth;
});

// Function to move the carousel to the right
function moveRight() {
  if (!isAutoScrolling) return;
  const firstItem = inner.firstElementChild;
  inner.appendChild(firstItem);
  inner.style.transition = "none";
  inner.style.transform = `translateX(-${itemWidth}px)`;
  setTimeout(() => {
    inner.style.transition = "transform 0.5s ease-in-out";
    inner.style.transform = "translateX(0)";
  }, 0);
}

// Set interval to automatically move right every 2 seconds
const autoScroll = setInterval(moveRight, 2000);

// Stop auto-scrolling when next or prev button is clicked
nextBtn.addEventListener("click", () => {
  clearInterval(autoScroll);
  isAutoScrolling = false;
  moveRight();
});

prevBtn.addEventListener("click", () => {
  clearInterval(autoScroll);
  isAutoScrolling = false;
  const lastItem = inner.lastElementChild;
  inner.prepend(lastItem);
  inner.style.transition = "none";
  inner.style.transform = `translateX(-${itemWidth}px)`;
  setTimeout(() => {
    inner.style.transition = "transform 0.5s ease-in-out";
    inner.style.transform = "translateX(0)";
  }, 0);
});
