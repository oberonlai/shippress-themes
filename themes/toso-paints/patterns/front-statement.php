<?php
/**
 * Title: Home: statement band
 * Slug: toso-paints/front-statement
 * Categories: toso-paints
 * Keywords: paint, wallpaper, shop
 * Viewport Width: 1440
 * Description: Ruled statement band: two-line headline, full-width rule, label with a slanted underline, paragraph from 50% and a right-half photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tp-sec tp-statement","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tp-sec tp-statement"><!-- wp:group {"align":"wide","className":"tp-statement__in sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tp-statement__in sp-stagger"><!-- wp:heading {"className":"tp-statement__h sp-reveal sp-reveal--up","fontSize":"xx-large"} -->
<h2 class="wp-block-heading tp-statement__h sp-reveal sp-reveal--up has-xx-large-font-size"><?php echo wp_kses_post( toso_paints_t( 'k52cdb2de' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tp-rule sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tp-rule sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tp-label tp-label--slant"} -->
<p class="tp-label tp-label--slant"><?php echo wp_kses_post( toso_paints_t( 'k8f7f4c1c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tp-rule__right","layout":{"type":"default"}} -->
<div class="wp-block-group tp-rule__right"><!-- wp:paragraph {"className":"tp-lede"} -->
<p class="tp-lede"><?php echo wp_kses_post( toso_paints_t( 'k93572883' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tp-statement__img"} -->
<figure class="wp-block-image size-full tp-statement__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/match-phone.webp' ) ); ?>" alt="<?php echo esc_attr( toso_paints_t( 'a0b71e942' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
