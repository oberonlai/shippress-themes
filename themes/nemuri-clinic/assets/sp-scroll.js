/* ShipPress sp-scroll v2 — IntersectionObserver reveal + count-up + parallax fallback. No deps. */
(function (d, w) {
	var h = d.documentElement, q = location.search,
		st = /[?&]sp-static/.test(q) ||
			(navigator.webdriver && !/[?&]sp-motion/.test(q)) ||
			(w.matchMedia && matchMedia('(prefers-reduced-motion:reduce)').matches);
	h.classList.add('sp-js');
	d.querySelectorAll(".sp-marquee .nc-strip__set:last-child").forEach(function (e) { e.setAttribute("aria-hidden", "true"); });
	if (st || !w.IntersectionObserver) { h.classList.add('sp-no-motion'); return; }

	function count(e) {
		var n = e.firstChild;
		while (n && !(n.nodeType === 3 && /\d/.test(n.nodeValue))) n = n.nextSibling;
		if (!n) return;
		var t = n.nodeValue, m = t.match(/\d[\d,]*\.?\d*/), s = m[0],
			v = parseFloat(s.replace(/,/g, '')), f = (s.split('.')[1] || '').length,
			g = s.indexOf(',') > 0, t0;
		requestAnimationFrame(function r(ts) {
			t0 = t0 || ts;
			var p = Math.min((ts - t0) / 1200, 1), x = (v * (1 - Math.pow(1 - p, 3))).toFixed(f);
			if (g) x = Number(x).toLocaleString('en-US', { minimumFractionDigits: f });
			n.nodeValue = p < 1 ? t.replace(s, x) : t;
			if (p < 1) requestAnimationFrame(r);
		});
	}

	var io = new IntersectionObserver(function (es) {
		es.forEach(function (x) {
			var e = x.target;
			if (!x.isIntersecting && x.boundingClientRect.top >= 0) return;
			e.classList.add('sp-in');
			if (e.classList.contains('sp-count')) count(e);
			io.unobserve(e);
		});
	}, { rootMargin: '0px', threshold: 0.01 });

	function hs(e) { // inside a horizontal scroller: viewport IO never fires, reveal at once
		for (var a = e.parentElement; a && a !== d.body; a = a.parentElement)
			if (a.scrollWidth > a.clientWidth + 1 && /auto|scroll/.test(getComputedStyle(a).overflowX)) return 1;
	}
	d.addEventListener('DOMContentLoaded', function () {
		d.querySelectorAll('.sp-reveal,.sp-count').forEach(function (e) {
			if (hs(e)) e.classList.add('sp-in'); else io.observe(e);
		});
		par();
	});

	// parallax fallback where CSS scroll-driven animations are missing (Firefox, older Safari):
	// rAF runs only while a .sp-parallax is in view (IO-gated); translate3d only; no scroll listener.
	function par() {
		if (w.CSS && CSS.supports && CSS.supports('animation-timeline:view()')) return;
		var on = [], run = 0;
		function lay(p) {
			try { return p.querySelector('.sp-parallax__layer,:scope>img,:scope>figure>img,:scope>.wp-block-cover__image-background'); }
			catch (x) { return p.querySelector('.sp-parallax__layer,img'); }
		}
		function tick() {
			var vh = w.innerHeight;
			on.forEach(function (p) {
				var l = p._spl, b = p.getBoundingClientRect(), k = parseFloat(getComputedStyle(p).getPropertyValue('--sp-par')) || 8,
					t = Math.max(0, Math.min(1, (vh - b.top) / (vh + b.height)));
				l.style.transform = 'translate3d(0,' + ((t * 2 - 1) * k / 100 * l.offsetHeight).toFixed(1) + 'px,0)';
			});
			run = on.length ? requestAnimationFrame(tick) : 0;
		}
		var po = new IntersectionObserver(function (es) {
			es.forEach(function (x) {
				var p = x.target, i = on.indexOf(p);
				if (x.isIntersecting && i < 0) on.push(p); else if (!x.isIntersecting && i >= 0) on.splice(i, 1);
			});
			if (on.length && !run) run = requestAnimationFrame(tick);
		});
		d.querySelectorAll('.sp-parallax').forEach(function (p) { p._spl = lay(p); if (p._spl) po.observe(p); });
	}
})(document, window);
