(self["webpackChunk"] = self["webpackChunk"] || []).push([["backToTop"],{

/***/ "./assets/backToTop.js":
/*!*****************************!*\
  !*** ./assets/backToTop.js ***!
  \*****************************/
/***/ (() => {

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  }); // scroll body to 0px on click

  $('#back-to-top').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 400);
    return false;
  });
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./assets/backToTop.js"));
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYmFja1RvVG9wLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7O0FBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVTtBQUMzQkYsRUFBQUEsQ0FBQyxDQUFDRyxNQUFELENBQUQsQ0FBVUMsTUFBVixDQUFpQixZQUFZO0FBQzNCLFFBQUlKLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUssU0FBUixLQUFzQixFQUExQixFQUE4QjtBQUM3QkwsTUFBQUEsQ0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQk0sTUFBbEI7QUFDQSxLQUZELE1BRU87QUFDTk4sTUFBQUEsQ0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQk8sT0FBbEI7QUFDQTtBQUNELEdBTkYsRUFEMkIsQ0FRMUI7O0FBQ0FQLEVBQUFBLENBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JRLEtBQWxCLENBQXdCLFlBQVk7QUFDbkNSLElBQUFBLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZVMsT0FBZixDQUF1QjtBQUN0QkosTUFBQUEsU0FBUyxFQUFFO0FBRFcsS0FBdkIsRUFFRyxHQUZIO0FBR0EsV0FBTyxLQUFQO0FBQ0EsR0FMRDtBQU1ELENBZkQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYmFja1RvVG9wLmpzIl0sInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XG5cdCQod2luZG93KS5zY3JvbGwoZnVuY3Rpb24gKCkge1xuXHRcdFx0aWYgKCQodGhpcykuc2Nyb2xsVG9wKCkgPiA1MCkge1xuXHRcdFx0XHQkKCcjYmFjay10by10b3AnKS5mYWRlSW4oKTtcblx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdCQoJyNiYWNrLXRvLXRvcCcpLmZhZGVPdXQoKTtcblx0XHRcdH1cblx0XHR9KTtcblx0XHQvLyBzY3JvbGwgYm9keSB0byAwcHggb24gY2xpY2tcblx0XHQkKCcjYmFjay10by10b3AnKS5jbGljayhmdW5jdGlvbiAoKSB7XG5cdFx0XHQkKCdib2R5LGh0bWwnKS5hbmltYXRlKHtcblx0XHRcdFx0c2Nyb2xsVG9wOiAwXG5cdFx0XHR9LCA0MDApO1xuXHRcdFx0cmV0dXJuIGZhbHNlO1xuXHRcdH0pO1xufSk7Il0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5Iiwid2luZG93Iiwic2Nyb2xsIiwic2Nyb2xsVG9wIiwiZmFkZUluIiwiZmFkZU91dCIsImNsaWNrIiwiYW5pbWF0ZSJdLCJzb3VyY2VSb290IjoiIn0=