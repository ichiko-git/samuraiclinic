// ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", () => {
  const hamburgerOpen = document.querySelector(".header__hamburger--open");
  const hamburgerClose = document.querySelector(".header__hamburger--close");
  const drawer = document.querySelector(".header__drawer");
  const overlay = document.querySelector(".overlay");

  // メニューを開く
  hamburgerOpen.addEventListener("click", () => {
    drawer.classList.add("is-open");
    overlay.classList.add("is-visible");
  });

  // メニューを閉じる
  hamburgerClose.addEventListener("click", () => {
    drawer.classList.remove("is-open");
    overlay.classList.remove("is-visible");
  });
});

// Swiper カルーセル
const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  effect: "fade",
  autoplay: true,
  loop: true,

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

// スクロール時にTOPに戻るボタン表示
window.addEventListener("scroll", function () {
  const backBtn = document.getElementById("back-btn");
  if (window.scrollY >= 200) {
    backBtn.style.opacity = "1";
  } else {
    backBtn.style.opacity = "0";
  }
});
