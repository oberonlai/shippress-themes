/* Yukisaki Route: turns the transparent header into a white floating card after 40px. One IntersectionObserver on a 1px sentinel at the top of the page, no scroll listener. */
(function (d) {
	if (!('IntersectionObserver' in window)) { return; }
	var bar = d.querySelector('.yr-bar');
	if (!bar) { return; }
	var s = d.createElement('span');
	s.className = 'yr-sentinel';
	s.setAttribute('aria-hidden', 'true');
	d.body.appendChild(s);
	new IntersectionObserver(function (es) {
		bar.classList.toggle('is-floating', !es[0].isIntersecting && es[0].boundingClientRect.top < 0);
	}).observe(s);
}(document));
