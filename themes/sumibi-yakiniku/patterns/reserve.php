<?php
/**
 * Title: Reserve: the one way to book
 * Slug: sumibi-yakiniku/reserve
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: A full-width tan band with the heading, the three steps in one row, the reservations line and one chestnut mailto button. No reveal on this band.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-reserve","layout":{"type":"default"}} -->
<section class="wp-block-group sy-reserve" id="reserve"><!-- wp:group {"className":"sy-reserve__in","layout":{"type":"default"}} -->
<div class="wp-block-group sy-reserve__in"><!-- wp:paragraph {"className":"sy-reserve__label"} -->
<p class="sy-reserve__label"><?php echo esc_html( sumibi_yakiniku_t( 'reserve_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sy-reserve__h"} -->
<h2 class="wp-block-heading sy-reserve__h"><?php echo esc_html( sumibi_yakiniku_t( 'reserve_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true,"className":"sy-steps"} -->
<ol class="wp-block-list sy-steps"><!-- wp:list-item -->
<li><?php echo esc_html( sumibi_yakiniku_t( 'reserve_s1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( sumibi_yakiniku_t( 'reserve_s2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( sumibi_yakiniku_t( 'reserve_s3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"sy-reserve__line"} -->
<p class="sy-reserve__line"><?php echo esc_html( sumibi_yakiniku_t( 'reserve_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sy-reserve__btns"} -->
<div class="wp-block-buttons sy-reserve__btns"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:table@sumibi.example?subject=<?php echo rawurlencode( sumibi_yakiniku_t( 'forms_reserve_subject' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'forms_reserve_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"sy-reserve__more"} -->
<p class="sy-reserve__more"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'reserve_page' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
