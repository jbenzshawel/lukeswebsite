/**
 * JavaScript for Luke's Website
 * Author: Addison Benzshawel
 */

$(function() {
  // initialize foundation
  $(document).foundation();

  // initialize slider
  $('.slick-slider').slick({
	dots: true,
	autoplay: true,
	infinite: true,
	speed: 500
  });
});