<?php
/**
 * Title: Schedule — page opening
 * Slug: ikebana-kyoshitsu/schedule-intro
 * Categories: ikebana-kyoshitsu, header
 * Keywords: schedule, timetable, term, trial, intro, page header
 * Viewport Width: 1440
 * Description: The schedule page head: an off-axis title, a lead on how the week works and a jump link to the trial-lesson form, with a small tilted illustration of a lesson table.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ik-page-head is-style-petal-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ik-page-head is-style-petal-light" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"ik-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ik-grid"><!-- wp:paragraph {"className":"is-style-vertical-label","style":{"layout":{"columnSpan":1}}} -->
<p class="is-style-vertical-label">Schedule &amp; trial</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"layout":{"columnSpan":7,"columnStart":2},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"is-style-off-axis"} -->
<h1 class="wp-block-heading is-style-off-axis">The week<br><em>in the studio.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Eleven classes a week, from Tuesday to Saturday. Mornings are quiet and bright; evenings are for people coming from work. The studio closes on Sundays, Mondays and through August.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#trial">Book a trial lesson</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/classes/">What each class covers</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-tilt ik-page-head__image","style":{"layout":{"columnSpan":4,"columnStart":9}}} -->
<figure class="wp-block-image size-full is-style-tilt ik-page-head__image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lesson-table.svg' ) ); ?>" alt="A lesson table from above: three arrangements in progress, cut stems and fallen petals" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
