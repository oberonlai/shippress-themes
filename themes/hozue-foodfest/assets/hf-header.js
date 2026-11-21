/* Header: hide while scrolling down, slide back in while scrolling up. Skipped for reduced motion and ?sp-static. */
(function (w, d) {
	var h = d.documentElement;
	/* Smooth anchor scroll (JS, not CSS scroll-behavior): in-page #links scroll under the sticky header. Skipped for reduced motion and ?sp-static. */
	if (!/[?&]sp-static/.test(w.location.search) && !(w.matchMedia && w.matchMedia('(prefers-reduced-motion: reduce)').matches)) {
		d.addEventListener('click', function (e) {
			var a = e.target.closest ? e.target.closest('a[href*="#"]') : null;
			if (!a || e.defaultPrevented || e.button || e.metaKey || e.ctrlKey || e.shiftKey) { return; }
			var u = new URL(a.href, w.location.href);
			if (u.pathname !== w.location.pathname || u.origin !== w.location.origin || u.hash.length < 2) { return; }
			var t = d.getElementById(decodeURIComponent(u.hash.slice(1)));
			if (!t) { return; }
			e.preventDefault();
			var hd = d.querySelector('.hf-head-part'), off = hd ? hd.getBoundingClientRect().height : 0;
			w.scrollTo({ top: t.getBoundingClientRect().top + w.pageYOffset - off, behavior: 'smooth' });
			if (w.history && w.history.pushState) { w.history.pushState(null, '', u.hash); }
		});
	}
	if (/[?&]sp-static/.test(w.location.search) || (w.matchMedia && w.matchMedia('(prefers-reduced-motion: reduce)').matches)) { return; }
	d.addEventListener('DOMContentLoaded', function () {
		var part = d.querySelector('.hf-head-part');
		if (!part) { return; }
		var last = w.pageYOffset, tick = false;
		function run() {
			tick = false;
			var y = w.pageYOffset, nav = part.querySelector('.is-menu-open');
			if (nav || y < 120 || y < last - 4) { part.classList.remove('is-hidden'); }
			else if (y > last + 4) { part.classList.add('is-hidden'); }
			last = y;
		}
		w.addEventListener('scroll', function () { if (!tick) { tick = true; w.requestAnimationFrame(run); } }, { passive: true });
		d.addEventListener('focusin', function (e) { if (part.contains(e.target)) { part.classList.remove('is-hidden'); } });
	});
}(window, document));
