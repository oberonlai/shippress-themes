<?php
/**
 * Title: Route bar
 * Slug: kanjo-college/route-bar
 * Categories: kanjo-college
 * Inserter: false
 * Description: The fixed term-route bar: five nodes, a pencil marker that rides the slate fill as the page scrolls, a bubble naming the stage, and the goal flag.
 */
?>
<!-- wp:html -->
<nav class="kc-route" aria-label="Term route">
	<div class="kc-route__track">
		<span class="kc-route__fill" aria-hidden="true"></span>
		<a class="kc-route__node" style="left:0%" href="/taking-a-place/"><span class="kc-route__lbl">Enrol</span></a>
		<a class="kc-route__node" style="left:25%" href="/#pace"><span class="kc-route__lbl">Weeks 1–4</span></a>
		<a class="kc-route__node" style="left:50%" href="/#pace"><span class="kc-route__lbl">Mock paper</span></a>
		<a class="kc-route__node" style="left:75%" href="/#pace"><span class="kc-route__lbl">Exam week</span></a>
		<a class="kc-route__node" style="left:100%" href="/term/"><span class="kc-route__lbl">Results</span></a>
		<span class="kc-route__marker" aria-hidden="true">
			<span class="kc-route__bubble"><span class="kc-route__ticker"><b>Enrol</b><b>Weeks 1–4</b><b>Mock paper</b><b>Exam week</b><b>Results</b></span></span>
			<svg class="kc-route__pencil" viewBox="0 0 22 22" width="22" height="22" focusable="false"><path d="M3 19 L5 13 L16 2 L20 6 L9 17 Z" fill="#EEF2F3" stroke="#1F2A30" stroke-width="1.5" stroke-linejoin="round"/><path d="M3 19 L5 13 L9 17 Z" fill="#B4533C" stroke="#1F2A30" stroke-width="1.5" stroke-linejoin="round"/><path d="M13 5 L17 9" stroke="#1F2A30" stroke-width="1.5"/></svg>
		</span>
		<svg class="kc-route__flag" viewBox="0 0 22 28" width="22" height="28" aria-hidden="true" focusable="false"><path d="M4 26 V3" stroke="#1F2A30" stroke-width="1.5" stroke-linecap="round"/><path d="M4 4 H19 L15 9 L19 14 H4 Z" fill="#B4533C" stroke="#1F2A30" stroke-width="1.5" stroke-linejoin="round"/></svg>
	</div>
</nav>
<!-- /wp:html -->
