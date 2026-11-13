<?php
/**
 * Title: Home: held
 * Slug: koori-coldstore/front-held
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: A giant lowercase word with four counting facts beside three narrative paragraphs about why every pallet gets a room number.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"why","className":"kc-sec kc-held","layout":{"type":"default"}} -->
<section id="why" class="wp-block-group alignfull kc-sec kc-held"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'held_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'held_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-held__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-held__grid"><!-- wp:group {"className":"kc-facts sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-facts sp-stagger"><!-- wp:group {"className":"kc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-fact__n sp-count"} -->
<p class="kc-fact__n sp-count"><?php echo esc_html( koori_coldstore_t( 'fact1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-fact__l"} -->
<p class="kc-fact__l"><?php echo esc_html( koori_coldstore_t( 'fact1_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-fact__n sp-count"} -->
<p class="kc-fact__n sp-count"><?php echo esc_html( koori_coldstore_t( 'fact2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-fact__l"} -->
<p class="kc-fact__l"><?php echo esc_html( koori_coldstore_t( 'fact2_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-fact__n sp-count"} -->
<p class="kc-fact__n sp-count"><?php echo esc_html( koori_coldstore_t( 'fact3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-fact__l"} -->
<p class="kc-fact__l"><?php echo esc_html( koori_coldstore_t( 'fact3_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-fact sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-fact sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-fact__n sp-count"} -->
<p class="kc-fact__n sp-count"><?php echo esc_html( koori_coldstore_t( 'fact4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-fact__l"} -->
<p class="kc-fact__l"><?php echo esc_html( koori_coldstore_t( 'fact4_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-held__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-held__text sp-reveal sp-reveal--up"><!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'held_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'held_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'held_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-more"} -->
<p class="kc-more"><a href="<?php echo koori_coldstore_url( '/about/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'held_more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
