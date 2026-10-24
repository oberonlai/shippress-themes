<?php
/**
 * Title: Home: brand statement
 * Slug: hozen-facilities/front-statement
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: A sharp photograph that comes into focus, a short statement set in lines, and two blurred photographs at the margins.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hz-statement","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hz-statement">
<!-- wp:group {"className":"hz-statement__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hz-statement__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-statement__img sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-statement__img sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3-gauge.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_h3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hz-statement__text","layout":{"type":"default"}} -->
<div class="wp-block-group hz-statement__text">
<!-- wp:paragraph {"className":"hz-lines sp-reveal sp-reveal--up"} -->
<p class="hz-lines sp-reveal sp-reveal--up"><?php echo wp_kses_post( hozen_facilities_t( 'st_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lines sp-reveal sp-reveal--up"} -->
<p class="hz-lines sp-reveal sp-reveal--up"><?php echo wp_kses_post( hozen_facilities_t( 'st_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-statement__p"} -->
<p class="hz-statement__p"><?php echo esc_html( hozen_facilities_t( 'st_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-linkrow hz-linkrow--narrow"} -->
<p class="hz-linkrow hz-linkrow--narrow"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'st_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-ghosts","layout":{"type":"default"}} -->
<div class="wp-block-group hz-ghosts">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-ghost-photo hz-ghost-photo--a"} -->
<figure class="wp-block-image size-full hz-ghost-photo hz-ghost-photo--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/g1-facade.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-ghost-photo hz-ghost-photo--b"} -->
<figure class="wp-block-image size-full hz-ghost-photo hz-ghost-photo--b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/g2-corridor.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
