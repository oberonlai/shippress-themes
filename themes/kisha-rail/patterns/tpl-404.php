<?php
/**
 * Title: Template: not found
 * Slug: kisha-rail/tpl-404
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Not-found page.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-sec kr-article","layout":{"type":"default"}} -->
<section class="wp-block-group kr-sec kr-article">
<!-- wp:group {"className":"kr-col","layout":{"type":"default"}} -->
<div class="wp-block-group kr-col">
<!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo esc_html( kisha_rail_t( 't404_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kr-h1p"} -->
<h1 class="wp-block-heading kr-h1p"><?php echo esc_html( kisha_rail_t( 't404_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-p"} -->
<p class="kr-p"><?php echo esc_html( kisha_rail_t( 't404_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-more"} -->
<p class="kr-more"><a href="/"><?php echo esc_html( kisha_rail_t( 't404_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
