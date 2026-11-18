<?php
/**
 * Title: Home: the still room
 * Slug: taruki-distillery/front-still
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: S2: two centred lines, an inset photograph at 87% of the width on charcoal, six stage dots, a long paragraph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--dark td-still","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull td-sec td-sec--dark td-still"><!-- wp:heading {"textAlign":"center","className":"td-h2 td-h2--light sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading has-text-align-center td-h2 td-h2--light sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'sr_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"td-still__sub sp-reveal sp-reveal--up"} -->
<p class="has-text-align-center td-still__sub sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'sr_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none","className":"td-inset sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image alignfull size-full td-inset sp-reveal sp-reveal--zoom"><img src="<?php echo taruki_img( 'img-05.webp' ); ?>" alt="<?php echo taruki_a( 'alt_05' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"td-dots","layout":{"type":"default"}} -->
<div class="wp-block-group td-dots"><!-- wp:paragraph {"className":"td-dots__i"} -->
<p class="td-dots__i"><?php echo esc_html( taruki_t( 'st_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-dots__i"} -->
<p class="td-dots__i"><?php echo esc_html( taruki_t( 'st_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-dots__i"} -->
<p class="td-dots__i"><?php echo esc_html( taruki_t( 'st_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-dots__i is-current"} -->
<p class="td-dots__i is-current"><?php echo esc_html( taruki_t( 'st_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-dots__i"} -->
<p class="td-dots__i"><?php echo esc_html( taruki_t( 'st_5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-dots__i"} -->
<p class="td-dots__i"><?php echo esc_html( taruki_t( 'st_6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-still__p sp-reveal sp-reveal--up"} -->
<p class="td-still__p sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'sr_body' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
