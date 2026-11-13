<?php
/**
 * Title: Home: the booking band
 * Slug: katachi-ergonomics/book
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk, consultancy
 * Viewport Width: 1440
 * Description: Full-bleed photograph with the white booking card docked at the lower left, the one repeated call to action.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"book","className":"ke-bookband","layout":{"type":"default"}} -->
<section id="book" class="wp-block-group alignfull ke-bookband"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ke-bookband__photo"} -->
<figure class="wp-block-image size-full ke-bookband__photo"><img src="<?php echo katachi_ergonomics_img( 'kit-bag.webp' ); ?>" alt="<?php echo esc_attr( katachi_ergonomics_t( 'alt_b01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ke-kv__card ke-bookcard","layout":{"type":"default"}} -->
<div class="wp-block-group ke-kv__card ke-bookcard"><!-- wp:heading {"level":2,"className":"ke-card__t"} -->
<h2 class="wp-block-heading ke-card__t"><?php echo esc_html( katachi_ergonomics_t( 'bk_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-card__p"} -->
<p class="ke-card__p"><?php echo esc_html( katachi_ergonomics_t( 'bk_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ke-card__cta"} -->
<div class="wp-block-buttons ke-card__cta"><!-- wp:button {"className":"ke-btn ke-btn--arrow"} -->
<div class="wp-block-button ke-btn ke-btn--arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo katachi_ergonomics_url( '/book/' ); ?>"><?php echo esc_html( katachi_ergonomics_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
