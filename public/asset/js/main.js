'use strict';

// modal variables
const modal = document.querySelector('.modal');
const modalCloseBtn = document.querySelector('.modal-close-btn');
const modalCloseOverlay = document.querySelector('.modal-close-overlay');

// modal function
const modalCloseFunc = function () { modal.classList.add('closed') }

// modal eventListener
modalCloseOverlay.addEventListener('click', modalCloseFunc);
modalCloseBtn.addEventListener('click', modalCloseFunc);




// notification toast variables
const notificationToast = document.querySelector('.notification-toast');
const toastCloseBtn = document.querySelector('.close-toast');

// notification toast eventListener
toastCloseBtn.addEventListener('click', function () {
  notificationToast.classList.add('closed');
});





// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('.mobileMenuOpenBtn');
const mobileMenu = document.querySelector('.mobile-nav-menu');
const mobileMenuCloseBtn = document.querySelector('.menu-close-btn');
const overlay = document.querySelector('.overlay');

  // mobile menu function

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu.classList.add('active');
    overlay.classList.add('active');
  });
}

const mobileMenuCloseFunc = function () {
  mobileMenu.classList.remove('active');
  overlay.classList.remove('active');
}


mobileMenuCloseBtn.addEventListener('click', mobileMenuCloseFunc);
overlay.addEventListener('click', mobileMenuCloseFunc);



// CATEGORY SIDEBAR variables
const CategorySidebarOpenBtn = document.querySelectorAll('.CategorySidebarOpenBtn');
const CategorySidebarMenu = document.querySelector('.CategorySidebarMenu');
const CategorySidebarCloseBtn = document.querySelector('.CategorySidebarCloseBtn');
// const overlay = document.querySelector('.overlay');

  // mobile menu function

for (let i = 0; i < CategorySidebarOpenBtn.length; i++) {

  CategorySidebarOpenBtn[i].addEventListener('click', function () {
    CategorySidebarMenu.classList.add('active');
    overlay.classList.add('active');
  });
}

const CategorySidebarCloseFunc = function () {
  CategorySidebarMenu.classList.remove('active');
  overlay.classList.remove('active');
}


CategorySidebarCloseBtn.addEventListener('click', CategorySidebarCloseFunc);
overlay.addEventListener('click', CategorySidebarCloseFunc);






// accordion variables
const accordionBtn = document.querySelectorAll('.accordionBtn');
const accordionCategoryList = document.querySelectorAll('.accordionCategoryList');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordionCategoryList.length; i++) {

      if (clickedBtn) break;

      if (accordionCategoryList[i].classList.contains('active')) {

        accordionCategoryList[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');

      }

    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}