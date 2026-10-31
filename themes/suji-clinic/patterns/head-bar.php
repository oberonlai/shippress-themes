<?php
/**
 * Title: Header: wordmark, address box, Book tab
 * Slug: suji-clinic/head-bar
 * Categories: suji-clinic
 * Keywords: clinic, header
 * Viewport Width: 1440
 * Inserter: no
 * Description: Transparent bar over the hero: wordmark at the left, address and hours, a framed box and the Book tab at the right.
 */
?>
<!-- wp:group {"className":"sj-bar","layout":{"type":"default"}} -->
<div class="wp-block-group sj-bar"><!-- wp:paragraph {"className":"sj-brand"} -->
<p class="sj-brand"><a class="sj-brand__mark" href="<?php echo suji_clinic_url(); ?>">Suji</a><span class="sj-brand__sub"><?php echo esc_html( suji_clinic_t( 'brand_sub' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-addr"} -->
<p class="sj-addr"><?php echo suji_clinic_lines( 'head_addr' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-hbox"} -->
<p class="sj-hbox"><span><?php echo esc_html( suji_clinic_t( 'head_box_1' ) ); ?></span><span><?php echo esc_html( suji_clinic_t( 'head_box_2' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sj-book"} -->
<p class="sj-book"><a href="<?php echo suji_clinic_url( 'visit' ); ?>"><span class="sj-book__s"><?php echo esc_html( suji_clinic_t( 'head_book_1' ) ); ?></span><span class="sj-book__b"><?php echo esc_html( suji_clinic_t( 'head_book_2' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
