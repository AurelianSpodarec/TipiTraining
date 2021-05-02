/**
 * External Dependencies
 */
// import 'jquery';
// import Glide, { Controls, Breakpoints } from '@glidejs/glide';
import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'

'use strict';

// $(document).ready(() => {
//   // console.log('Hello world');
// });
(function() {



    var processScroll = function processScroll() {
        var docElem = document.documentElement,
            docBody = document.body,
            scrollTop = docElem['scrollTop'] || docBody['scrollTop'],
            scrollBottom = (docElem['scrollHeight'] || docBody['scrollHeight']) - window.innerHeight,
            scrollPercent = scrollTop / scrollBottom * 100 + '%';

        document.getElementById('progress-bar').style.setProperty('--scrollAmount', scrollPercent);

        console.log('docElem');
    };

    window.addEventListener('scroll', processScroll);





    var headerNavigation = document.querySelectorAll('.menu-item-has-children');
    headerNavigation.forEach(function (item) {

        item.addEventListener("mouseover", function () {
            item.childNodes[2].classList.add("is-block")

            setTimeout(function () {
                item.childNodes[2].classList.add('is-opacity');
            }, 10);

        });

        item.addEventListener("mouseleave", function () {
            item.childNodes[2].classList.remove("is-block", "is-opacity");
        });
    });


    // var headerMenu = document.querySelector(".mobile-menu");
    // var siteHamburger = document.querySelector(".header__hamburger");
    // var html = document.querySelector('html');
    // var mobileMenuCloseButton = document.querySelector('.mobile-menu__close');

    // console.log("M", headerMenu)

    // function toggleMainMenu() {
    //     html.classList.toggle("html-overflow-modal");
    //     headerMenu.classList.toggle("is-active");
    //     siteHamburger.classList.toggle("is-active");

    // }

    // function closeMobileMenu() {
    //     headerMenu.classList.remove("is-active");
    //     html.classList.remove("html-overflow-modal");
    // }

    // mobileMenuCloseButton.addEventListener('click', closeMobileMenu, false);
    // siteHamburger.addEventListener('click', toggleMainMenu, false);
  




    var parallax = document.getElementsByClassName('js-parallax');
    var xScrollPosition;
    var yScrollPosition;

    function setTranslate(xPos, yPos, el) {
        el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
    }


    function scrollLoop() {
        xScrollPosition = window.scrollX;
        yScrollPosition = window.scrollY;
        document.querySelectorAll('.js-parallax').forEach(function (parallax) {
            return setTranslate(0, scrollY * parallax.dataset.parallaxSpeed, parallax);
        });

    }
    window.addEventListener("scroll", scrollLoop, false);



    var siteHeader = document.querySelector('.js-mainHeader'),
        siteHeaderHeight = siteHeader && siteHeader.offsetHeight,
        prevScroll = 0;

    function stickyNav() {
        if (window.scrollY >= siteHeaderHeight) {
            siteHeader && siteHeader.classList.add('is-sticky');
        } else {
            siteHeader && siteHeader.classList.remove('is-sticky');
        }
    }

    function showNav() {
        var currentScroll = window.pageYOffset;

        if (currentScroll < prevScroll) {
            siteHeader && siteHeader.classList.add('sticky-show');
        } else {
            siteHeader && siteHeader.classList.remove('sticky-show');
        }
        prevScroll = currentScroll;
    }

    window.addEventListener('scroll', showNav);
    window.addEventListener('scroll', stickyNav);




new Glide('.glide').mount({ Controls, Breakpoints })





// const addProgressBar = () => {
//     const element = document.createElement('div');
//     element.id = 'progress-container';
//     element.innerHTML = '<div id="progress-bar"></div>';

//     document.body.appendChild(element);
// };
// const readingProgress = target => {

//     const winTop = window.pageYOffset || document.documentElement.scrollTop;
//     const targetBottom = target.offsetTop + target.scrollHeight;
//     const windowBottom = winTop + window.outerHeight;
//     const progress = 100 - (((targetBottom - windowBottom + window.outerHeight / 3) / (targetBottom - window.outerHeight + window.outerHeight / 3)) * 100);

//     document.querySelector('#progress-bar').style.width = progress + '%';

//     (progress > 100) ? document.querySelector('#progress-container').classList.add('ready') : document.querySelector('#progress-container').classList.remove('ready');
// };

// document.addEventListener('DOMContentLoaded', () => {
//     const content = document.querySelector('.article');
//     addProgressBar();
//     readingProgress(content);
//     window.addEventListener('scroll', () => {
//          readingProgress(content);
//     });
//  });



















})();


