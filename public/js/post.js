/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/post.js ***!
  \******************************/
$(function () {
  // indexの新規投稿のjs
  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();

    if (scrollTop > 10) {
      $('#newPost').fadeOut(100);
    } else {
      $('#newPost').fadeIn(100);
    }
  }); // niceのいいね機能ajax

  $('#nice').on('click', function () {
    var id = $('#nice').val(); // post_idがなければfalse

    if (!id) {
      return false;
    } // ajax通信


    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      }
    });
    $.ajax({
      //POST通信
      type: "get",
      // リクエストURL
      url: "/niceArtisan",
      dataType: "json",
      data: {
        'id': id
      }
    }) //通信が成功したとき
    .then(function (res) {
      $('#nice').toggleClass('text-pink-500');
      console.log(res);
      return true;
    }) //通信が失敗したとき
    .fail(function (error) {
      console.log(error);
    });
    return false;
  });
});
/******/ })()
;