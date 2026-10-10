/* Komugi Pan: marks the trays already out of the oven ("Out") and the next one ("Next") on every daily bake board,
   from the visitor's own clock. The board reads the same without it. */
(function () {
	function minutes(text) {
		var m = /(\d{1,2})[:.](\d{2})/.exec(text || "");
		return m ? parseInt(m[1], 10) * 60 + parseInt(m[2], 10) : -1;
	}
	function mark() {
		var now = new Date(), t = now.getHours() * 60 + now.getMinutes();
		document.querySelectorAll(".kp-board__table tbody tr").forEach(function (row) {
			row.classList.remove("is-out", "is-next");
		});
		document.querySelectorAll(".kp-board__table tbody").forEach(function (body) {
			var next = null;
			Array.prototype.forEach.call(body.rows, function (row) {
				var at = minutes(row.cells[0] && row.cells[0].textContent);
				if (at < 0) return;
				if (at <= t) row.classList.add("is-out");
				else if (!next) { next = row; row.classList.add("is-next"); }
			});
		});
	}
	if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", mark); else mark();
	setInterval(mark, 60000);
})();
