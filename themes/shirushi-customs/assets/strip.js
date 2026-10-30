/* Handover strip: the two round arrows scroll the strip by one card. Click handlers only. */
document.addEventListener('click', function (e) {
	var b = e.target.closest && e.target.closest('.sc-ctl__btn');
	if (!b) return;
	var wrap = b.closest('.sc-handover');
	var strip = wrap && wrap.querySelector('.sc-strip');
	if (!strip) return;
	var card = strip.querySelector('.sc-card');
	var step = card ? card.getBoundingClientRect().width + 16 : strip.clientWidth * 0.8;
	strip.scrollBy({ left: b.classList.contains('sc-ctl__btn--prev') ? -step : step, behavior: 'smooth' });
});
