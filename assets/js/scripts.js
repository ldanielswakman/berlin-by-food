// Component: Add loading class
$(document).ready(function() {
	$('body').toggleClass('isLoading isLoaded');

	$('a:not([href^="#"], [href*="google.com/maps"])').click(function() {
		$('body').toggleClass('isLoading isLoaded');
		// setTimeout(function() { $('body').toggleClass('isLoading isLoaded'); }, 3000);
	});
});






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