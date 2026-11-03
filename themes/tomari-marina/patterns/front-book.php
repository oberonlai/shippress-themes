<?php
/**
 * Title: Home: book a season berth (booking close)
 * Slug: tomari-marina/front-book
 * Categories: tomari-marina
 * Keywords: home, booking, cta
 * Viewport Width: 1440
 * Description: On deep ink: the display heading, a short intro, three hairline cells (request, walk the berth, sign the season) and the bottom line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-book","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-book"><!-- wp:group {"className":"tm-book__inner tm-section","layout":{"type":"default"}} -->
<div class="wp-block-group tm-book__inner tm-section"><!-- wp:heading {"level":2,"className":"tm-h2 tm-h2--huge sp-stagger"} -->
<h2 class="wp-block-heading tm-h2 tm-h2--huge sp-stagger"><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_book_07' ) ); ?></span><span class="sp-reveal sp-reveal--up"><?php echo wp_kses_post( tomari_marina_t( 'front_book_08' ) ); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"tm-book__intro"} -->
<p class="tm-book__intro"><?php echo wp_kses_post( tomari_marina_t( 'front_book_09' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tm-book__cells","layout":{"type":"default"}} -->
<div class="wp-block-group tm-book__cells"><!-- wp:group {"className":"tm-bookcell","layout":{"type":"default"}} -->
<div class="wp-block-group tm-bookcell"><!-- wp:paragraph {"className":"tm-bookcell__rule"} -->
<p class="tm-bookcell__rule"><strong><?php echo wp_kses_post( tomari_marina_t( 'front_book_01' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_book_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-bookcell","layout":{"type":"default"}} -->
<div class="wp-block-group tm-bookcell"><!-- wp:paragraph {"className":"tm-bookcell__rule"} -->
<p class="tm-bookcell__rule"><strong><?php echo wp_kses_post( tomari_marina_t( 'front_book_03' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_book_04' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tm-bookcell","layout":{"type":"default"}} -->
<div class="wp-block-group tm-bookcell"><!-- wp:paragraph {"className":"tm-bookcell__rule"} -->
<p class="tm-bookcell__rule"><strong><?php echo wp_kses_post( tomari_marina_t( 'front_book_05' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tomari_marina_t( 'front_book_06' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tomari-marina/bottom-line"} /--></section>
<!-- /wp:group -->