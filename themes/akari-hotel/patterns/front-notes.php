<?php
/**
 * Title: Home: guests notes
 * Slug: akari-hotel/front-notes
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: Three short guest stories in text columns separated by hairlines.
 */
?>
<!-- wp:group {"className":"ak-ch ak-ch--notes","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section id="notes" class="wp-block-group alignfull ak-ch ak-ch--notes"><!-- wp:group {"className":"ak-notes","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide ak-notes"><!-- wp:heading {"level":2,"className":"ak-h2"} -->
<h2 class="wp-block-heading ak-h2"><?php echo esc_html( akari_hotel_t( 'notes_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"ak-notes__cols"} -->
<div class="wp-block-columns ak-notes__cols"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akari_hotel_t( 'note1_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ak-h3"} -->
<h3 class="wp-block-heading ak-h3"><?php echo esc_html( akari_hotel_t( 'note1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-small"} -->
<p class="ak-small"><?php echo esc_html( akari_hotel_t( 'note1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-link"} -->
<p class="ak-link"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'notes_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akari_hotel_t( 'note2_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ak-h3"} -->
<h3 class="wp-block-heading ak-h3"><?php echo esc_html( akari_hotel_t( 'note2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-small"} -->
<p class="ak-small"><?php echo esc_html( akari_hotel_t( 'note2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-link"} -->
<p class="ak-link"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'notes_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akari_hotel_t( 'note3_lab' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ak-h3"} -->
<h3 class="wp-block-heading ak-h3"><?php echo esc_html( akari_hotel_t( 'note3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-small"} -->
<p class="ak-small"><?php echo esc_html( akari_hotel_t( 'note3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-link"} -->
<p class="ak-link"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'notes_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
