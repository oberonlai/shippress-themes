<?php
/**
 * Title: Home: quote band
 * Slug: hakobi-logistics/quote-cta
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Description: A narrow bengara band with one sentence and the quote link; a transparent cut-out pallet of boxes breaks above the band top edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"hg-quote","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hg-quote"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hg-quote__obj"} -->
<figure class="wp-block-image size-full hg-quote__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pallet-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_pallet' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hg-quote__text"} -->
<p class="hg-quote__text"><?php echo esc_html( hakobi_logistics_t( 'cta_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hg-quote__btns"} -->
<div class="wp-block-buttons hg-quote__btns"><!-- wp:button {"className":"hg-quote__btn"} -->
<div class="wp-block-button hg-quote__btn"><a class="wp-block-button__link wp-element-button" href="/quote/"><?php echo esc_html( hakobi_logistics_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
