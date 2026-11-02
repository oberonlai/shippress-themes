/* Pause / play for the hero photo strip: toggles a class, no scroll listener. */
(function () {
	var btn = document.querySelector('.mk-pause');
	var strip = document.querySelector('.mk-strip');
	if (!btn || !strip) { return; }
	btn.addEventListener('click', function () {
		var paused = strip.classList.toggle('is-paused');
		btn.setAttribute('aria-pressed', paused ? 'true' : 'false');
	});
})();
