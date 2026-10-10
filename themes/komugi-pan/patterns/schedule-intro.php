<?php
/**
 * Title: Bake schedule: page head with the bake board
 * Slug: komugi-pan/schedule-intro
 * Categories: komugi-pan, featured
 * Keywords: bake, schedule, oven, times, board
 * Viewport Width: 1440
 * Description: The bake schedule page head: a title and a lead next to the daily bake board (a synced pattern, edited in one place).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kp-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kp-page-head"><!-- wp:group {"align":"wide","className":"kp-split kp-split--5-7 kp-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kp-split kp-split--5-7 kp-split--top"><!-- wp:group {"className":"kp-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kp-stack"><!-- wp:paragraph {"className":"is-style-tag"} -->
<p class="is-style-tag">Bake schedule</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">What comes out <em>when</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Bread tastes best in the hour after it leaves the oven. Here is the order of the trays, so you can come for the one you love.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-loaf"} -->
<figure class="wp-block-image size-full is-style-loaf"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/croissant.jpg' ) ); ?>" alt="Croissants fresh from the oven on a floured linen cloth"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"komugi-pan/bake-board"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
