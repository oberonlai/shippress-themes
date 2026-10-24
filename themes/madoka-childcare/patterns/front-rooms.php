<?php
/**
 * Title: Home: three rooms
 * Slug: madoka-childcare/front-rooms
 * Categories: madoka-childcare
 * Description: Three equal cards, each with a photograph, a white room-name tab, a meta line and a sentence.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mc-sec mc-sec--l mc-rooms","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-sec mc-sec--l mc-rooms"><!-- wp:group {"className":"mc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mc-wrap"><!-- wp:heading {"level":2,"className":"mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"} -->
<h2 class="wp-block-heading mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"><mark class="mc-stripe__in"><?php echo wp_kses( str_replace( "\n", '<br>', esc_html( madoka_childcare_t( 'rooms_h' ) ) ), array( 'br' => array() ) ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"mc-rooms__row sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mc-rooms__row sp-stagger"><!-- wp:group {"className":"mc-room sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mc-room sp-reveal sp-reveal--up"><!-- wp:group {"className":"mc-room__ph","layout":{"type":"default"}} -->
<div class="wp-block-group mc-room__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-room__img"} -->
<figure class="wp-block-image size-full mc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p10.webp' ) ); ?>" alt="<?php echo esc_attr( madoka_childcare_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mc-tab mc-tab--room"} -->
<p class="mc-tab mc-tab--room"><?php echo esc_html( madoka_childcare_t( 'room1_n' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mc-meta"} -->
<p class="mc-meta"><?php echo esc_html( madoka_childcare_t( 'room1_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'room1_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-room sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mc-room sp-reveal sp-reveal--up"><!-- wp:group {"className":"mc-room__ph","layout":{"type":"default"}} -->
<div class="wp-block-group mc-room__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-room__img"} -->
<figure class="wp-block-image size-full mc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11.webp' ) ); ?>" alt="<?php echo esc_attr( madoka_childcare_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mc-tab mc-tab--room"} -->
<p class="mc-tab mc-tab--room"><?php echo esc_html( madoka_childcare_t( 'room2_n' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mc-meta"} -->
<p class="mc-meta"><?php echo esc_html( madoka_childcare_t( 'room2_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'room2_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-room sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mc-room sp-reveal sp-reveal--up"><!-- wp:group {"className":"mc-room__ph","layout":{"type":"default"}} -->
<div class="wp-block-group mc-room__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mc-room__img"} -->
<figure class="wp-block-image size-full mc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12.webp' ) ); ?>" alt="<?php echo esc_attr( madoka_childcare_t( 'alt_p12' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mc-tab mc-tab--room"} -->
<p class="mc-tab mc-tab--room"><?php echo esc_html( madoka_childcare_t( 'room3_n' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mc-meta"} -->
<p class="mc-meta"><?php echo esc_html( madoka_childcare_t( 'room3_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'room3_x' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mc-link"} -->
<p class="mc-link"><a href="/rooms/"><?php echo esc_html( madoka_childcare_t( 'rooms_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
