/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/post.js ***!
  \******************************/
$(function () {
  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();

    if (scrollTop < 10) {
      $('#newPost').fadeIn(100);
    } else {
      $('#newPost').fadeOut(100);
    }
  });
});
/******/ })()
;