<?php
/**
 * Title: FAQ: questions owners ask
 * Slug: ashiato-hotel/faq
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: A pale sage band: heading, lede and paw-wash photograph on the left, six accordion answers on the right.
 */
?>
<!-- wp:group {"tagName":"section","className":"ah-sec ah-faq","anchor":"faq","layout":{"type":"default"}} -->
<section id="faq" class="wp-block-group ah-sec ah-faq"><!-- wp:group {"className":"ah-faq__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ah-faq__grid"><!-- wp:group {"className":"ah-faq__side sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-faq__side sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2 ah-h2--large"} -->
<h2 class="wp-block-heading ah-h2 ah-h2--large"><?php echo esc_html( ashiato_hotel_t( 'faq_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'faq_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"ah-faq__img"} -->
<figure class="wp-block-image size-full ah-faq__img"><img src="<?php echo ashiato_hotel_img( 'paw-wash.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p12' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ah-more"} -->
<p class="ah-more"><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'faq_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-faq__list sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-faq__list sp-reveal sp-reveal--up"><!-- wp:details {"showContent":true} -->
<details class="wp-block-details ah-qa" open><summary><?php echo esc_html( ashiato_hotel_t( 'faq1_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'faq1_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 'faq2_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'faq2_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 'faq3_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'faq3_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 'faq4_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'faq4_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 'faq5_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'faq5_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details ah-qa"><summary><?php echo esc_html( ashiato_hotel_t( 'faq6_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'faq6_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
