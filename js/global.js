let btn = document.querySelector(".scroll-top");

window.onscroll = function () {
  if (scrollY >= 100) {
    btn.style.display = "block";
  } else {
    btn.style.display = "none";
  }
};

btn.onclick = function () {
  window.scrollTo({
    left: 0,
    top: 0,
    behavior: "smooth",
  });
};

//
let bars = document.getElementById("bars");
let nav = document.getElementById("nav");

bars.onclick = function () {
  nav.classList.toggle("active");
  bars.classList.toggle("active");
};
