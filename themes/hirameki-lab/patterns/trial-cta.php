<?php
/**
 * Title: Home: trial lab band
 * Slug: hirameki-lab/trial-cta
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Description: One sentence and one button on a kouji band, with the cut-out bottle rocket rising past the band top edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"hl-cta","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-cta"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-cta__obj"} -->
<figure class="wp-block-image size-full hl-cta__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rocket-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_rocket' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hl-cta__text"} -->
<p class="hl-cta__text"><?php echo esc_html( hirameki_lab_t( 'cta_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hl-cta__btns"} -->
<div class="wp-block-buttons hl-cta__btns"><!-- wp:button {"className":"hl-cta__btn"} -->
<div class="wp-block-button hl-cta__btn"><a class="wp-block-button__link wp-element-button" href="/trial/"><?php echo esc_html( hirameki_lab_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
