<?php
/**
 * Title: Home: booking
 * Slug: koori-coldstore/front-booking
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: A giant lowercase word, a four-five ratio photograph and one ruled list of four booking steps with time labels.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"booking","className":"kc-sec kc-booking","layout":{"type":"default"}} -->
<section id="booking" class="wp-block-group alignfull kc-sec kc-booking"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'booking_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'booking_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-booking__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-booking__grid"><!-- wp:group {"className":"kc-booking__photo sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-booking__photo sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-fig"} -->
<figure class="wp-block-image size-full kc-fig"><img src="<?php echo koori_coldstore_img( 'planner-board.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_y03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kc-caption"} -->
<p class="kc-caption"><?php echo esc_html( koori_coldstore_t( 'booking_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-booking__list","layout":{"type":"default"}} -->
<div class="wp-block-group kc-booking__list"><!-- wp:paragraph {"className":"kc-intro"} -->
<p class="kc-intro"><?php echo esc_html( koori_coldstore_t( 'booking_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-steps sp-stagger"><!-- wp:group {"className":"kc-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-step__n"} -->
<p class="kc-step__n"><?php echo esc_html( koori_coldstore_t( 'step1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-step__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step__body"><!-- wp:heading {"level":3,"className":"kc-step__title"} -->
<h3 class="wp-block-heading kc-step__title"><?php echo esc_html( koori_coldstore_t( 'step1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'step1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-step__time"} -->
<p class="kc-step__time"><?php echo esc_html( koori_coldstore_t( 'step1_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-step__n"} -->
<p class="kc-step__n"><?php echo esc_html( koori_coldstore_t( 'step2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-step__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step__body"><!-- wp:heading {"level":3,"className":"kc-step__title"} -->
<h3 class="wp-block-heading kc-step__title"><?php echo esc_html( koori_coldstore_t( 'step2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'step2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-step__time"} -->
<p class="kc-step__time"><?php echo esc_html( koori_coldstore_t( 'step2_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-step__n"} -->
<p class="kc-step__n"><?php echo esc_html( koori_coldstore_t( 'step3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-step__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step__body"><!-- wp:heading {"level":3,"className":"kc-step__title"} -->
<h3 class="wp-block-heading kc-step__title"><?php echo esc_html( koori_coldstore_t( 'step3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'step3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-step__time"} -->
<p class="kc-step__time"><?php echo esc_html( koori_coldstore_t( 'step3_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kc-step__n"} -->
<p class="kc-step__n"><?php echo esc_html( koori_coldstore_t( 'step4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kc-step__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step__body"><!-- wp:heading {"level":3,"className":"kc-step__title"} -->
<h3 class="wp-block-heading kc-step__title"><?php echo esc_html( koori_coldstore_t( 'step4_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'step4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-step__time"} -->
<p class="kc-step__time"><?php echo esc_html( koori_coldstore_t( 'step4_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
