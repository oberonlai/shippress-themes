/* Yukiki Shoes: the gateway tabs. Without this script (or in the editor) all three panels stay visible, stacked. */
(function () {
	document.querySelectorAll('.ys-tabs').forEach(function (root) {
		var tabs = [].slice.call(root.querySelectorAll('[role="tab"]')),
			panels = [].slice.call(root.querySelectorAll('[role="tabpanel"]'));
		if (!tabs.length || tabs.length !== panels.length) { return; }
		function select(i, focus) {
			tabs.forEach(function (t, j) {
				t.setAttribute('aria-selected', j === i ? 'true' : 'false');
				t.tabIndex = j === i ? 0 : -1;
			});
			panels.forEach(function (p, j) { p.hidden = j !== i; });
			if (focus) { tabs[i].focus(); }
		}
		tabs.forEach(function (t, i) {
			t.addEventListener('click', function () { select(i); });
			t.addEventListener('keydown', function (e) {
				var n = tabs.length;
				if (e.key === 'ArrowRight') { e.preventDefault(); select((i + 1) % n, true); }
				else if (e.key === 'ArrowLeft') { e.preventDefault(); select((i + n - 1) % n, true); }
				else if (e.key === 'Home') { e.preventDefault(); select(0, true); }
				else if (e.key === 'End') { e.preventDefault(); select(n - 1, true); }
			});
		});
		root.classList.add('is-on');
		select(0);
	});
}());
