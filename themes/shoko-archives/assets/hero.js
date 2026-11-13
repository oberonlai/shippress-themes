/* Shoko Archives: pause / play button of the hero slideshow. No scroll listener, no library. */
(function (d) {
	var b = d.querySelector('.sa-pause');
	if (!b) { return; }
	var hero = d.querySelector('.sa-hero');
	b.addEventListener('click', function () {
		var paused = hero.classList.toggle('is-paused');
		b.setAttribute('aria-pressed', paused ? 'true' : 'false');
		b.setAttribute('aria-label', paused ? b.getAttribute('data-play') : b.getAttribute('data-pause'));
	});
})(document);
