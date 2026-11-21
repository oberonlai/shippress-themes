<?php
/**
 * Title: Home: notice
 * Slug: enogu-supply/front-notice
 * Categories: enogu-supply
 * Viewport Width: 1440
 * Description: One underlined notice line between two circle arrows that link to the journal.
 */
?>
<!-- wp:group {"className":"en-sec en-notice-sec","tagName":"section","anchor":"notice","layout":{"type":"default"}} -->
<section id="notice" class="wp-block-group en-sec en-notice-sec">
<!-- wp:group {"className":"en-col","layout":{"type":"default"}} -->
<div class="wp-block-group en-col">
<!-- wp:group {"className":"en-title-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'notice_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"en-notice","layout":{"type":"default"}} -->
<div class="wp-block-group en-notice">
<!-- wp:paragraph {"className":"en-circ en-circ--prev"} -->
<p class="en-circ en-circ--prev"><a href="/journal/" aria-label="<?php echo enogu_supply_a( 'prev' ); ?>">‹</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-notice__t"} -->
<p class="en-notice__t"><a href="/journal/"><?php echo esc_html( enogu_supply_t( 'notice_t' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-circ en-circ--next"} -->
<p class="en-circ en-circ--next"><a href="/journal/" aria-label="<?php echo enogu_supply_a( 'next' ); ?>">›</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-notice__more"} -->
<p class="en-notice__more"><a href="/journal/"><?php echo esc_html( enogu_supply_t( 'view_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
