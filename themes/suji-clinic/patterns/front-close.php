<?php
/**
 * Title: Home: close
 * Slug: suji-clinic/front-close
 * Categories: suji-clinic
 * Keywords: clinic, book, contact
 * Viewport Width: 1440
 * Description: A blue-tint band with one left-aligned line and a square Book button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-close","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sj-close"><!-- wp:group {"className":"sj-wrap sj-close__in","layout":{"type":"default"}} -->
<div class="wp-block-group sj-wrap sj-close__in"><!-- wp:group {"className":"sj-close__text","layout":{"type":"default"}} -->
<div class="wp-block-group sj-close__text"><!-- wp:heading {"className":"sj-h2"} -->
<h2 class="wp-block-heading sj-h2"><?php echo esc_html( suji_clinic_t( 'close_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sj-close__note"} -->
<p class="sj-close__note"><?php echo esc_html( suji_clinic_t( 'close_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"sj-btns"} -->
<div class="wp-block-buttons sj-btns"><!-- wp:button {"className":"sj-btn"} -->
<div class="wp-block-button sj-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo suji_clinic_url( 'visit' ); ?>"><?php echo esc_html( suji_clinic_t( 'close_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
