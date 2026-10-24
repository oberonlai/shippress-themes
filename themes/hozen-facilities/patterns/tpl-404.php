<?php
/**
 * Title: Template: 404
 * Slug: hozen-facilities/tpl-404
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Template: 404
 */
?>
<!-- wp:group {"tagName":"main","className":"hz-main","layout":{"type":"default"}} -->
<main class="wp-block-group hz-main">
<!-- wp:group {"align":"full","className":"hz-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-pagehead">
<!-- wp:group {"className":"hz-lockup hz-lockup--page","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup hz-lockup--page">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 't404_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 't404_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 't404_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-pagebody","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pagebody">
<!-- wp:paragraph -->
<p><?php echo esc_html( hozen_facilities_t( 't404_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-linkrow hz-linkrow--narrow"} -->
<p class="hz-linkrow hz-linkrow--narrow"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 't404_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
