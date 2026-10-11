/* Komugi Pan: marks the trays already out of the oven ("Out") and the next one ("Next") on every daily bake board,
   with the words of the board's own legend (the .kp-board__key--out / --next paragraphs, editable in the synced
   pattern; no legend, no words),
   by the bakery's own clock: the site's timezone (Settings > General) and the server time printed with the page
   (window.komugiPanBakeBoard, see functions.php), never the visitor's timezone. The board reads the same without it. */
(function () {
	var site = window.komugiPanBakeBoard || {}, loaded = Date.now();
	// The page may come from a page cache: when the server time is clearly older than the visitor's clock, the
	// visitor's clock gives the instant (it is timezone-free); the site's timezone still turns it into a time of day.
	var skew = typeof site.now === "number" && loaded - site.now < 15 * 60000 ? site.now - loaded : 0;
	function minutes(text) {
		var m = /(\d{1,2})[:.](\d{2})/.exec(text || "");
		return m ? parseInt(m[1], 10) * 60 + parseInt(m[2], 10) : -1;
	}
	function siteMinutes(ms) {
		if (site.timezone) {
			try {
				var parts = new Intl.DateTimeFormat("en-GB", { timeZone: site.timezone, hour: "numeric", minute: "numeric", hourCycle: "h23" }).formatToParts(new Date(ms)), h = -1, min = -1;
				parts.forEach(function (p) {
					if (p.type === "hour") h = parseInt(p.value, 10) % 24;
					if (p.type === "minute") min = parseInt(p.value, 10);
				});
				if (h >= 0 && min >= 0) return h * 60 + min;
			} catch (e) { /* not an IANA zone name (e.g. "+09:00"): use the offset below */ }
		}
		if (typeof site.offset === "number") {
			var d = new Date(ms + site.offset * 1000);
			return d.getUTCHours() * 60 + d.getUTCMinutes();
		}
		var local = new Date(ms);
		return local.getHours() * 60 + local.getMinutes();
	}
	function label(board, which) {
		var key = board && board.querySelector(".kp-board__key--" + which);
		return key ? key.textContent.trim() : "";
	}
	function status(row, which, text) {
		row.classList.add(which);
		if (row.cells[1] && text) row.cells[1].setAttribute("data-status", text);
	}
	function mark() {
		var t = siteMinutes(Date.now() + skew);
		document.querySelectorAll(".kp-board__table tbody tr").forEach(function (row) {
			row.classList.remove("is-out", "is-next");
			if (row.cells[1]) row.cells[1].removeAttribute("data-status");
		});
		document.querySelectorAll(".kp-board__table tbody").forEach(function (body) {
			var next = null, board = body.closest ? body.closest(".kp-board") : null;
			var out = label(board, "out"), soon = label(board, "next");
			Array.prototype.forEach.call(body.rows, function (row) {
				var at = minutes(row.cells[0] && row.cells[0].textContent);
				if (at < 0) return;
				if (at <= t) status(row, "is-out", out);
				else if (!next) { next = row; status(row, "is-next", soon); }
			});
		});
	}
	if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", mark); else mark();
	setInterval(mark, 60000);
})();
