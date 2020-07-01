// Component: Add loading class
$(document).ready(function() {
	$('body').toggleClass('isLoading isLoaded');

	$('a:not([href^="#"], [href*="google.com/maps"], [target="_blank"])').click(function() {
		$('body').toggleClass('isLoading isLoaded');
		setTimeout(function() { $('body').toggleClass('isLoading isLoaded'); }, 2000);
	});
});






// Component: Randomise sticker
$(document).ready(function() {
  if($('.sticker').length > 0) {

    isMob = ($(window).width() < 768) ? true : false;
    maxRot = 15;

    randLeft = isMob ? getRandomInt(100, 170) : getRandomInt(-100, 30);
    randTop = isMob ? getRandomInt(120, 150) : getRandomInt(-30, 100);
    randRot = getRandomInt(-maxRot, maxRot);

    $('.sticker')
      .css('left', randLeft)
      .css('top', randTop);
    $('.sticker span')
      .css('transform', 'rotate(' + randRot + 'deg)');
  }
});
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}







// Component: smoothScroll
$(document).ready(function() {
  $('a[href^="#"]').smoothScroll({
    speed: 600,
    afterScroll: function() {
      updateHash($(this).attr('href'));
    }
  });
});
// Update URL hash
function updateHash(href) {
  // Restore original URL + search query if href is ''
  if(href.length < 1) {
    href = window.location.origin + window.location.pathname + window.location.search;
  }
  if(history.pushState) {
    history.pushState(null, null, href);
  }
  else {
    location.hash = href;
  }
}






// Component: Newsletter Signup Modal
$(document).ready(function() {

  var $target = $('.cta-modal');
  var popupDelay = $target.attr('data-popup-delay');

  var CTAModalTimeout = setTimeout(function() {
    $target.toggleClass('isActive');
  }, popupDelay);

  $('.cta-modal__close').click(function() {
    $target.removeClass('isActive');
    clearTimeout(CTAModalTimeout);
  });
  
});
