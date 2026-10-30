/* Minori Seminars: prev/next arrows for the date strips. Click handler only, no scroll listener. */
document.addEventListener('click', function (e) {
	var b = e.target.closest('[data-ms-strip]');
	if (!b) return;
	var s = document.querySelector(b.getAttribute('data-ms-strip'));
	if (!s) return;
	var c = s.firstElementChild, step = c ? c.getBoundingClientRect().width + (parseFloat(getComputedStyle(s).columnGap) || 0) : 300;
	s.scrollBy({ left: (b.getAttribute('data-dir') === 'prev' ? -1 : 1) * step, behavior: 'smooth' });
});
