/* Koori Cold Stores: pause / play for the cross-fading sliders (click handler only; no scroll listener, no library). */
(function (d) {
	var btns = d.querySelectorAll('.kc-pager__pause');
	for (var i = 0; i < btns.length; i++) {
		(function (b) {
			var box = b.closest('.kc-slider');
			if (!box) { return; }
			b.addEventListener('click', function () {
				var on = box.classList.toggle('is-paused');
				b.setAttribute('aria-pressed', on ? 'true' : 'false');
				b.setAttribute('aria-label', b.getAttribute(on ? 'data-play' : 'data-pause'));
			});
		})(btns[i]);
	}
})(document);
