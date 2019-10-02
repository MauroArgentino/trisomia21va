/*jQuery(document).ready(function()
{
var navOffset = jQuery("nav").offset().top;

jQuery("nav").wrap('<div class="nav-placeholder"></div>');

jQuery(".nav-placeholder").height(jQuery("nav").outerHeight());

jQuery(window).scroll(function()
{
var scrollPos = jQuery(window).scrollTop();

if (scrollPos>=navOffset)
{
	jQuery("nav").addClass("fixed");

}else {
	jQuery("nav").removeClass("fixed");
}
});
});*/
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("barra-menu");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 