<?php
/**
 * Title: Home: lasts
 * Slug: kakeru-run/front-lasts
 * Categories: kakeru-run
 * Keywords: lasts, info row, pill
 * Viewport Width: 1440
 * Description: 2+1 info row: clay slash cell in the left rail, a text cell with a big clay pill, and a two-cell photograph that runs on into the right rail.
 */
?>
<!-- wp:group {"align":"full","className":"kr-row kr-info kr-info--lasts sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kr-row kr-info kr-info--lasts sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"kr-rail kr-rail--l kr-rail--slash kr-rail--fill","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--l kr-rail--slash kr-rail--fill"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cell kr-cell--text","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cell kr-cell--text"><!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo wp_kses_post( kakeru_run_t( 'ka91e3555' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"kr-h2 kr-h2--cell"} -->
<h2 class="wp-block-heading kr-h2 kr-h2--cell"><?php echo wp_kses_post( kakeru_run_t( 'kc0dd61e5' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kakeru_run_t( 'k06fd0d5c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kr-pillwrap"} -->
<div class="wp-block-buttons kr-pillwrap"><!-- wp:button {"className":"kr-pill kr-pill--clay"} -->
<div class="wp-block-button kr-pill kr-pill--clay"><a class="wp-block-button__link wp-element-button" href="/lasts/"><?php echo wp_kses_post( kakeru_run_t( 'kdd714c53' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cell kr-photo kr-photo--wide","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cell kr-photo kr-photo--wide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kr-photo__img"} -->
<figure class="wp-block-image size-full kr-photo__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P07.webp' ) ); ?>" alt="<?php echo esc_attr( kakeru_run_t( 'aeecf18bb' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
