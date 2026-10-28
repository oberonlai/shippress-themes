<?php
/**
 * Title: Home: the single application band
 * Slug: azuke-finance/front-apply
 * Categories: azuke-finance
 * Keywords: invoice funding, factoring, landing
 * Viewport Width: 1440
 * Description: Dark band repeating the one call to action, with a photograph bleeding to the right edge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-apply","layout":{"type":"default"}} -->
<section id="apply" class="wp-block-group alignfull az-apply"><!-- wp:group {"className":"az-apply__text","layout":{"type":"default"}} -->
<div class="wp-block-group az-apply__text"><!-- wp:heading {"className":"az-title az-title--light sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading az-title az-title--light sp-reveal sp-reveal--mask"><?php echo azuke_finance_accent( 'a_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"az-body az-body--light"} -->
<p class="az-body az-body--light"><?php echo esc_html( azuke_finance_t( 'a_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"az-apply__list","layout":{"type":"default"}} -->
<div class="wp-block-group az-apply__list"><!-- wp:paragraph {"className":"az-apply__li"} -->
<p class="az-apply__li"><?php echo esc_html( azuke_finance_t( 'a_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-apply__li"} -->
<p class="az-apply__li"><?php echo esc_html( azuke_finance_t( 'a_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"az-apply__li"} -->
<p class="az-apply__li"><?php echo esc_html( azuke_finance_t( 'a_l3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"az-pill az-pill--light az-pill--lg-row"} -->
<div class="wp-block-buttons az-pill az-pill--light az-pill--lg-row"><!-- wp:button {"className":"az-pill az-pill--light az-pill--lg"} -->
<div class="wp-block-button az-pill az-pill--light az-pill--lg"><a class="wp-block-button__link wp-element-button" href="/apply/"><?php echo esc_html( azuke_finance_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"az-apply__contact"} -->
<p class="az-apply__contact"><?php echo esc_html( azuke_finance_t( 'a_phone' ) ); ?> · <?php echo esc_html( azuke_finance_t( 'a_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"az-apply__photo"} -->
<figure class="wp-block-image size-full az-apply__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h13.webp' ) ); ?>" alt="<?php echo esc_attr( azuke_finance_t( 'alt_h13' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
