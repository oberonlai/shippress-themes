<?php
/**
 * Title: Home: the office in one wide photograph
 * Slug: nami-staffing/front-quote
 * Categories: nami-staffing
 * Keywords: quote, office, photograph
 * Viewport Width: 1440
 * Description: A full-width photograph of the office with a quotation from the founder set in a white box over its lower edge.
 */
?>
<!-- wp:group {"tagName": "section", "className": "nf-wide", "layout": {"type": "default"}, "align": "full"} -->
<section class="wp-block-group alignfull nf-wide"><!-- wp:image {"sizeSlug": "large", "linkDestination": "none", "className": "nf-wide__img"} -->
<figure class="wp-block-image size-large nf-wide__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-wide.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'front_wide_alt' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className": "nf-wide__box", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-wide__box"><!-- wp:paragraph {"className": "nf-wide__q"} -->
<p class="nf-wide__q"><?php echo wp_kses_post( nami_staffing_t( 'front_quote' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className": "nf-wide__by"} -->
<p class="nf-wide__by"><?php echo wp_kses_post( nami_staffing_t( 'front_quote_by' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
