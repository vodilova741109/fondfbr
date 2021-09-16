document.addEventListener("DOMContentLoaded", function () {
  "use strict";
  /**
 * Top menu scroll
 * 
 * 
 */

  let siteHeader = document.getElementById("site-header");
  function throttleScroll(e) {
    if (window.pageYOffset < 102) {
      window.requestAnimationFrame(function () {
        siteHeader.classList.remove("transparent");
      });
    }
    dealWithScrolling();
  }
  function dealWithScrolling() {
    siteHeader.classList.add("transparent");
  }

  window.addEventListener("scroll", throttleScroll, false);




});