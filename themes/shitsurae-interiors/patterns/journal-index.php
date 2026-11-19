<?php
/**
 * Title: Journal index
 * Slug: shitsurae-interiors/journal-index
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Sticky index of the journal: All, Flats, Shops, Materials, with the solid triangle marker on the current one.
 */
?>
<!-- wp:paragraph {"className":"si-index si-index--j"} -->
<p class="si-index si-index--j"><a class="ix-all" href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'ix_all' ) ); ?></a><a class="ix-flats" href="<?php echo esc_url( home_url( '/category/flats/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'ix_flats' ) ); ?></a><a class="ix-shops" href="<?php echo esc_url( home_url( '/category/shops/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'ix_shops' ) ); ?></a><a class="ix-materials" href="<?php echo esc_url( home_url( '/category/materials/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'ix_materials' ) ); ?></a></p>
<!-- /wp:paragraph -->
