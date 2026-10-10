<?php
/**
 * Title: Listing: book a viewing
 * Slug: sumai-realty/listing-viewing
 * Categories: sumai-realty
 * Keywords: viewing, booking, agent, call to action, listing
 * Viewport Width: 1440
 * Description: The end of every listing sheet: a small portrait and an invitation to book a viewing, with links to the contact form and the listings.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sr-section sr-section--white","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sr-section sr-section--white"><!-- wp:group {"align":"wide","className":"sr-viewing","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sr-viewing"><!-- wp:image {"sizeSlug":"medium","className":"is-style-plan-frame sr-viewing__photo"} -->
<figure class="wp-block-image size-medium is-style-plan-frame sr-viewing__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/agent.jpg' ) ); ?>" alt="A smiling agent in a grey suit standing in an empty, sunlit flat"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sr-viewing__text","layout":{"type":"default"}} -->
<div class="wp-block-group sr-viewing__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Viewings</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sr-h"} -->
<h2 class="wp-block-heading sr-h">See it with the plan in hand.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A viewing takes about forty minutes. We bring the full-size plan, the fee table and a tape measure; you bring your questions. Weekday evenings and weekends are fine.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Book a viewing</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/listings/">All listings</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
