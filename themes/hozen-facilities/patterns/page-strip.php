<?php
/**
 * Title: Page: contact strip
 * Slug: hozen-facilities/page-strip
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Pale contact strip closing the inner pages.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hz-strip","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-strip">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'ct_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'ct_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'ct_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-strip__row","layout":{"type":"default"}} -->
<div class="wp-block-group hz-strip__row">
<!-- wp:group {"className":"hz-phone","layout":{"type":"default"}} -->
<div class="wp-block-group hz-phone">
<!-- wp:paragraph {"className":"hz-phone__num"} -->
<p class="hz-phone__num"><a href="tel:+31105550198">+31 10 555 0198</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-phone__meta"} -->
<p class="hz-phone__meta"><?php echo esc_html( hozen_facilities_t( 'co_phone_l' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hz-linkrow hz-linkrow--narrow"} -->
<p class="hz-linkrow hz-linkrow--narrow"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'ct_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
