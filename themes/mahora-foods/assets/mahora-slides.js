/* Mahora Foods: service-day slideshow. No library, no scroll listener. Autoplay 6 s, crossfade in CSS (.3s ease).
   Without JS (or in the editor) all four slides are stacked and visible. */
(function () {
	'use strict';
	var d = document;
	var root = d.querySelector('.mf-slides');
	if (!root) { return; }
	var slides = Array.prototype.slice.call(root.querySelectorAll('.mf-slide'));
	if (slides.length < 2) { return; }
	var h = d.documentElement;
	var still = h.classList.contains('sp-no-motion') || (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches);
	var i = 0, timer = null, paused = still;
	function el(tag, cls, attrs) {
		var n = d.createElement(tag);
		n.className = cls;
		for (var k in attrs) { n.setAttribute(k, attrs[k]); }
		return n;
	}
	var ctl = el('div', 'mf-slides__ctl', { role: 'group', 'aria-label': 'Slideshow controls' });
	var dots = slides.map(function (s, n) {
		var b = el('button', 'mf-slides__dot', { type: 'button', 'aria-label': 'Slide ' + (n + 1) });
		b.addEventListener('click', function () { show(n); });
		ctl.appendChild(b);
		return b;
	});
	var pause = el('button', 'mf-slides__pause', { type: 'button', 'aria-label': paused ? 'Play slideshow' : 'Pause slideshow', 'aria-pressed': paused ? 'true' : 'false' });
	pause.addEventListener('click', function () {
		paused = !paused;
		pause.setAttribute('aria-pressed', paused ? 'true' : 'false');
		pause.setAttribute('aria-label', paused ? 'Play slideshow' : 'Pause slideshow');
		paused ? stop() : start();
	});
	ctl.appendChild(pause);
	var prev = el('button', 'mf-slides__nav mf-slides__nav--prev', { type: 'button', 'aria-label': 'Previous slide' });
	var next = el('button', 'mf-slides__nav mf-slides__nav--next', { type: 'button', 'aria-label': 'Next slide' });
	prev.addEventListener('click', function () { show(i - 1); });
	next.addEventListener('click', function () { show(i + 1); });
	root.appendChild(ctl);
	root.appendChild(prev);
	root.appendChild(next);
	function show(n) {
		i = (n + slides.length) % slides.length;
		slides.forEach(function (s, k) { s.classList.toggle('is-active', k === i); s.setAttribute('aria-hidden', k === i ? 'false' : 'true'); });
		dots.forEach(function (b, k) { b.setAttribute('aria-current', k === i ? 'true' : 'false'); });
		if (!paused) { stop(); start(); }
	}
	function start() { stop(); timer = window.setTimeout(function () { show(i + 1); }, 6000); }
	function stop() { if (timer) { window.clearTimeout(timer); timer = null; } }
	root.classList.add('is-ready');
	show(0);
	if (!paused) { start(); }
}());
