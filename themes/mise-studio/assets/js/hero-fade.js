/* Mise Studio hero: slow cross-fade between two photographs (5s hold, 2s fade) and the two chevrons. No scroll listener. */
(function (d) {
	var hero = d.querySelector('.ms-hero');
	if (!hero) { return; }
	var h = d.documentElement, auto = h.classList.contains('sp-js') && !h.classList.contains('sp-no-motion');
	function show(two) { hero.classList.remove('is-fading'); hero.classList.toggle('is-two', two); }
	hero.querySelectorAll('.ms-chev').forEach(function (b) {
		b.addEventListener('click', function () { show(!hero.classList.contains('is-two')); });
	});
	hero.addEventListener('keydown', function (e) {
		if (e.key === 'ArrowLeft') { show(false); } else if (e.key === 'ArrowRight') { show(true); }
	});
	if (auto) { hero.classList.add('is-fading'); }
	['mouseenter', 'focusin'].forEach(function (t) { hero.addEventListener(t, function () { hero.classList.add('is-paused'); }); });
	['mouseleave', 'focusout'].forEach(function (t) { hero.addEventListener(t, function () { hero.classList.remove('is-paused'); }); });
})(document);
