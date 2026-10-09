<?php
/**
 * Title: This week in the studio (timetable teaser)
 * Slug: ikebana-kyoshitsu/schedule-teaser
 * Categories: ikebana-kyoshitsu, featured
 * Keywords: schedule, timetable, this week, seats, lessons
 * Viewport Width: 1440
 * Description: A blush band with this week's lessons as a dotted price-list style list (day, time, class, seats left) beside a tilted studio illustration and a link to the full timetable.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ik-section ik-week","backgroundColor":"blush","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ik-section ik-week has-blush-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"ik-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide ik-grid"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-tilt ik-reveal","style":{"layout":{"columnSpan":6,"columnStart":1}}} -->
<figure class="wp-block-image size-full is-style-tilt ik-reveal"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio-room.svg' ) ); ?>" alt="The studio in morning light: paper screens, long low tables and arrangements waiting on a shelf" style="aspect-ratio:4/3;object-fit:cover"/><figcaption class="wp-element-caption">Six places at each table, north light from nine until noon.</figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ik-week__text ik-reveal","style":{"layout":{"columnSpan":5,"columnStart":8},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group ik-week__text ik-reveal"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">12 — 18 October</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">This week <em>in the studio</em></h2>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-leaders"} -->
<ul class="wp-block-list is-style-leaders"><!-- wp:list-item -->
<li><span>Tue 10:00 · First Branch</span> <span>2 seats</span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>Wed 18:30 · After-work class</span> <span>1 seat</span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>Thu 10:00 · Teaching Certificate</span> <span>full</span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>Sat 10:00 · Trial lesson</span> <span>3 seats</span></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><span>Sat 13:30 · Visitors' class in English</span> <span>4 seats</span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/schedule/">The full timetable</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
