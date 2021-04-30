/**
 * External Dependencies
 */
// import 'jquery';
// import Glide, { Controls, Breakpoints } from '@glidejs/glide';
import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'


// $(document).ready(() => {
//   // console.log('Hello world');
// });
(function() {


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





let prog = document.getElementById('progress');

let body = document.querySelectorAll('.article'),
    html = document.documentElement;

let height = Math.max(body.scrollHeight, body.offsetHeight, body.clientHeight, body.scrollHeight, body.offsetHeight);

const setProgress = () => {
   let scrollFromTop = (document.documentElement.scrollTop || body.scrollTop) + html.clientHeight;
   let width = scrollFromTop / height * 100 + '%';

   console.log('scroll', html.clientHeight, body.scrollTop);

   prog.style.width = width;
}

window.addEventListener('scroll', setProgress);

setProgress();


})();


