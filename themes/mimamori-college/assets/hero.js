/* Hero cross-fade: three photos, opacity 1 s, hold 6 s. Timer only. Static (reduced motion, ?sp-static) shows photo 1. */
(function () {
	var root = document.querySelector('.mc-hero');
	if (!root) { return; }
	var slides = root.querySelectorAll('.mc-slide');
	var dots = root.querySelectorAll('.mc-dot');
	var pause = root.querySelector('.mc-pause');
	if (slides.length < 2) { return; }
	var still = window.matchMedia('(prefers-reduced-motion: reduce)').matches || /[?&]sp-static/.test(location.search) || navigator.webdriver === true;
	var i = 0, timer = null, paused = false, inView = true;
	function show(n) {
		i = (n + slides.length) % slides.length;
		slides.forEach(function (s, k) { s.classList.toggle('is-on', k === i); });
		dots.forEach(function (d, k) { d.setAttribute('aria-current', k === i ? 'true' : 'false'); });
	}
	function stop() { if (timer) { clearTimeout(timer); timer = null; } }
	function start() { stop(); if (!paused && !still && inView) { timer = setTimeout(function tick() { show(i + 1); timer = setTimeout(tick, 7000); }, 7000); } }
	dots.forEach(function (d, k) { d.addEventListener('click', function () { show(k); start(); }); });
	if (pause) {
		pause.addEventListener('click', function () {
			paused = !paused;
			pause.setAttribute('aria-pressed', paused ? 'true' : 'false');
			pause.setAttribute('aria-label', paused ? (pause.getAttribute('data-play') || 'Play the photo slideshow') : (pause.getAttribute('data-pause') || 'Pause the photo slideshow'));
			start();
		});
	}
	document.addEventListener('visibilitychange', function () { if (document.hidden) { stop(); } else { start(); } });
	if ('IntersectionObserver' in window) { new IntersectionObserver(function (e) { inView = e[0].isIntersecting; if (inView) { start(); } else { stop(); } }).observe(root); }
	root.classList.add('mc-hero--js');
	show(0);
	start();
})();
