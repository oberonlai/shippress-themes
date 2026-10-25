/* Umi Swim School: pill tabs (click + arrow keys) and the day-schedule strip buttons. No scroll listeners. */
(function () {
	document.querySelectorAll('.us-tabs').forEach(function (box) {
		var tabs = [].slice.call(box.querySelectorAll('[role="tab"]'));
		var panels = [].slice.call(box.querySelectorAll('.us-panel'));
		if (!tabs.length) { return; }
		panels.forEach(function (pn, i) { pn.setAttribute('role', 'tabpanel'); if (tabs[i]) { pn.setAttribute('aria-labelledby', tabs[i].id); } });
		function show(i, focus) {
			tabs.forEach(function (t, j) { t.setAttribute('aria-selected', j === i ? 'true' : 'false'); t.tabIndex = j === i ? 0 : -1; });
			panels.forEach(function (pn, j) { pn.classList.toggle('is-active', j === i); });
			if (focus) { tabs[i].focus(); }
		}
		box.classList.add('us-tabs-on');
		tabs.forEach(function (t, i) {
			t.addEventListener('click', function () { show(i); });
			t.addEventListener('keydown', function (e) {
				var k = e.key, n = tabs.length;
				if (k === 'ArrowRight') { show((i + 1) % n, true); e.preventDefault(); }
				else if (k === 'ArrowLeft') { show((i + n - 1) % n, true); e.preventDefault(); }
				else if (k === 'Home') { show(0, true); e.preventDefault(); }
				else if (k === 'End') { show(n - 1, true); e.preventDefault(); }
			});
		});
		show(0);
	});
	var strip = document.querySelector('.us-strip');
	document.querySelectorAll('.us-strip__btn').forEach(function (b) {
		b.addEventListener('click', function () {
			if (strip) { strip.scrollBy({ left: (+b.getAttribute('data-dir')) * (strip.firstElementChild ? strip.firstElementChild.offsetWidth + 80 : 600), behavior: 'smooth' }); }
		});
	});
})();
