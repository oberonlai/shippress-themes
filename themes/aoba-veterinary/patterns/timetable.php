<?php
/**
 * Title: Opening-hours timetable block
 * Slug: aoba-veterinary/timetable
 * Categories: aoba-veterinary
 * Keywords: home
 * Viewport Width: 1440
 * Description: A solid accent block with white dots for the open half-days, used on the home page and in the footer.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:html -->
<div class="av-tt" role="table" aria-label="Opening hours">
<div class="av-tt__row av-tt__row--head" role="row"><span role="columnheader"></span><span role="columnheader">Mon</span><span role="columnheader">Tue</span><span role="columnheader">Wed</span><span role="columnheader">Thu</span><span role="columnheader">Fri</span><span role="columnheader">Sat</span><span role="columnheader">Sun</span></div>
<div class="av-tt__row" role="row"><span role="rowheader">9:00–12:30</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="closed">—</span></div>
<div class="av-tt__row" role="row"><span role="rowheader">15:30–19:00</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="open">●</span><span role="cell" aria-label="until 17:00">▲</span><span role="cell" aria-label="closed">—</span></div>
</div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"av-tt__note"} -->
<p class="av-tt__note">▲ Saturday afternoon until 17:00. Closed on public holidays. Urgent same-day slots each weekday.</p>
<!-- /wp:paragraph -->
