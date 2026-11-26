/* Enban Records: the hero photo strip. Click only (no autoplay, no scroll listener, no library). */
(function () {
	var card = document.querySelector('.eb-hero__card');
	if (!card) { return; }
	var track = card.querySelector('.eb-slides');
	var slides = track.children;
	var n = slides.length;
	var dots = document.querySelectorAll('.eb-dots button');
	var cap = document.querySelector('.eb-hero__caption');
	var peek = document.querySelector('.eb-hero__peek img');
	var i = 0;
	function go(k) {
		i = (k + n) % n;
		track.style.setProperty('--eb-i', i);
		dots.forEach(function (d, j) { if (j === i) { d.setAttribute('aria-current', 'true'); } else { d.removeAttribute('aria-current'); } });
		var next = slides[(i + 1) % n].querySelector('img');
		if (peek && next) { peek.removeAttribute('srcset'); peek.src = next.currentSrc || next.src; }
		var fc = slides[i].querySelector('figcaption');
		if (cap && fc) { cap.textContent = (i + 1) + ' / ' + n + ' — ' + fc.textContent; }
	}
	card.querySelectorAll('.eb-hero__prev').forEach(function (b) { b.addEventListener('click', function () { go(i - 1); }); });
	card.querySelectorAll('.eb-hero__next').forEach(function (b) { b.addEventListener('click', function () { go(i + 1); }); });
	dots.forEach(function (d, j) { d.addEventListener('click', function () { go(j); }); });
	go(0);
})();
