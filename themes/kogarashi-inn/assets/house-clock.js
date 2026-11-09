/* House clock: sets the hands from Europe/London time at load and every 60s. No library, no scroll listener. */
(function () {
	var root = document.documentElement;
	if (root.classList.contains('sp-no-motion') || (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) || !window.Intl) { return; }
	var f = new Intl.DateTimeFormat('en-GB', { timeZone: 'Europe/London', hour: '2-digit', minute: '2-digit', hour12: false });
	function tick() {
		var p = f.formatToParts(new Date()), h = 0, m = 0, i;
		for (i = 0; i < p.length; i++) { if (p[i].type === 'hour') { h = parseInt(p[i].value, 10) % 12; } if (p[i].type === 'minute') { m = parseInt(p[i].value, 10); } }
		var hs = document.querySelectorAll('.ki-hand--h'), ms = document.querySelectorAll('.ki-hand--m');
		for (i = 0; i < hs.length; i++) { hs[i].style.setProperty('--r', (h * 30 + m / 2) + 'deg'); }
		for (i = 0; i < ms.length; i++) { ms[i].style.setProperty('--r', (m * 6) + 'deg'); }
	}
	tick();
	setInterval(tick, 60000);
})();
