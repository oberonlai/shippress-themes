<?php
/**
 * Title: Home: how a table is held
 * Slug: nagisa-grill/front-tables
 * Categories: nagisa-grill
 * Keywords: tables, booking, rules
 * Viewport Width: 1440
 * Description: Section word on the left, the narrative and four table rules divided by tide hairlines on the right with a pill, then a card-on-table photograph and one italic line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ng-tables"} -->
<section class="wp-block-group alignfull ng-tables"><!-- wp:group {"className":"ng-split"} -->
<div class="wp-block-group ng-split"><!-- wp:group {"className":"ng-split__l"} -->
<div class="wp-block-group ng-split__l"><!-- wp:group {"className":"ng-label"} -->
<div class="wp-block-group ng-label"><?php echo nagisa_grill_tide(); ?></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"ng-word","fontSize":"xx-large"} -->
<h2 class="wp-block-heading ng-word has-xx-large-font-size">Tables</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ng-split__r"} -->
<div class="wp-block-group ng-split__r"><!-- wp:paragraph {"className":"ng-lede"} -->
<p class="ng-lede">We welcome guests across two seatings each evening from Wednesday to Sunday. Because we prepare only enough fish for the tables booked each day, every reservation is held with deliberate care, so we ask that guests reserve their places in advance.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ng-rules"} -->
<div class="wp-block-group ng-rules"><!-- wp:paragraph {"className":"ng-rule"} -->
<p class="ng-rule">Parties of up to 8 at one table; larger groups write first.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-rule"} -->
<p class="ng-rule">A deposit of €20 per guest holds the table and comes off the bill.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-rule"} -->
<p class="ng-rule">We hold your table for 15 minutes after the seating time.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-rule"} -->
<p class="ng-rule">Cancel by 15:00 the day before and the deposit is returned in full.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/tables/">Book a table</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ng-tables__foot"} -->
<div class="wp-block-group ng-tables__foot"><!-- wp:image {"aspectRatio":"1.4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"ng-tables__photo"} -->
<figure class="wp-block-image size-full ng-tables__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-card.webp' ) ); ?>" alt="Host placing a folded paper reservation card on a wooden table set for two." style="aspect-ratio:1.4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ng-promise"} -->
<p class="ng-promise">A table is a promise; we keep it for fifteen minutes.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
