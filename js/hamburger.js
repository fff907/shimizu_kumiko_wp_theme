'use strict';

{
  const hamburger = document.querySelector('.header__hamburger');
  const nav = document.querySelector('.global-nav');
  const navLinks = document.querySelectorAll('.nav__list a');

  // メニューを閉じる関数
  function closeMenu() {
    nav.classList.remove('show');
    hamburger.classList.remove('is-active');
    document.body.style.overflow = '';
  }

  // ハンバーガーメニューの開閉
  hamburger.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('show');
    hamburger.classList.toggle('is-active');
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  // ナビ内リンクをクリックしたらメニューを閉じる
  navLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // 画面幅が1000px以上になったらメニューを自動で閉じる（PC対応）
  window.addEventListener('resize', () => {
    if (window.innerWidth > 1000) {
      closeMenu();
    }
  });
}
