/* Hatoba College: hero slideshow (cross-fade, caption, week-tick fill, dots, arrows, pause). No scroll listener, no library. */
(function (d) {
	var hero = d.querySelector('.hc-hero');
	if (!hero || !hero.querySelector('.hc-slide')) { return; }
	var slides = hero.querySelectorAll('.hc-slide'), caps = hero.querySelectorAll('.hc-cap'), dots = hero.querySelectorAll('.hc-dot'),
		ticks = hero.querySelector('.hc-ticks'), pause = hero.querySelector('.hc-pause'), weeks = [4, 8, 12],
		i = 0, paused = false, timer = 0, still = d.documentElement.classList.contains('sp-no-motion');
	function show(n) {
		i = (n + slides.length) % slides.length;
		for (var k = 0; k < slides.length; k++) {
			slides[k].classList.toggle('is-active', k === i);
			if (caps[k]) { caps[k].classList.toggle('is-active', k === i); }
			if (dots[k]) { dots[k].classList.toggle('is-active', k === i); if (k === i) { dots[k].setAttribute('aria-current', 'true'); } else { dots[k].removeAttribute('aria-current'); } }
		}
		if (ticks) { ticks.style.setProperty('--hc-fill', ((weeks[i] - 1) / 11 * 100).toFixed(2) + '%'); }
	}
	var seen = true;
	function play() { stop(); if (!paused && !still && seen) { timer = setInterval(function () { show(i + 1); }, 5000); } }
	function stop() { if (timer) { clearInterval(timer); timer = 0; } }
	function go(n) { show(n); play(); }
	var pv = hero.querySelector('.hc-arrow--prev'), nx = hero.querySelector('.hc-arrow--next');
	if (pv) { pv.addEventListener('click', function () { go(i - 1); }); }
	if (nx) { nx.addEventListener('click', function () { go(i + 1); }); }
	for (var k = 0; k < dots.length; k++) { (function (n) { dots[n].addEventListener('click', function () { go(n); }); })(k); }
	if (pause) {
		pause.addEventListener('click', function () {
			paused = !paused;
			hero.classList.toggle('is-paused', paused);
			pause.setAttribute('aria-pressed', paused ? 'true' : 'false');
			pause.setAttribute('aria-label', pause.getAttribute(paused ? 'data-play' : 'data-pause'));
			if (paused) { stop(); } else { play(); }
		});
	}
	if (still) { hero.classList.add('is-still'); }
	if (window.IntersectionObserver) {
		new IntersectionObserver(function (es) { seen = es[0].isIntersecting; if (seen) { play(); } else { stop(); } }).observe(hero.querySelector('.hc-window'));
	}
	show(0);
	play();
})(document);
