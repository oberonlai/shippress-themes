<?php
/**
 * Title: Home: the day (sideways strip)
 * Slug: koori-coldstore/front-day
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Description: A heading row with a giant lowercase word and the daily routine, then a horizontal scroll-snap strip of four time cards that bleeds off the right edge.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"day","className":"kc-sec kc-day","layout":{"type":"default"}} -->
<section id="day" class="wp-block-group alignfull kc-sec kc-day"><!-- wp:group {"className":"kc-day__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-day__head"><!-- wp:group {"className":"kc-title","layout":{"type":"default"}} -->
<div class="wp-block-group kc-title"><!-- wp:heading {"className":"kc-giant"} -->
<h2 class="wp-block-heading kc-giant"><?php echo esc_html( koori_coldstore_t( 'day_word' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-sublabel"} -->
<p class="kc-sublabel"><?php echo esc_html( koori_coldstore_t( 'day_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-day__intro","layout":{"type":"default"}} -->
<div class="wp-block-group kc-day__intro"><!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'day_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-hint"} -->
<p class="kc-hint"><?php echo esc_html( koori_coldstore_t( 'day_hint' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-strip sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-strip sp-reveal sp-reveal--up"><!-- wp:group {"className":"kc-strip__track","layout":{"type":"default"}} -->
<div class="wp-block-group kc-strip__track"><!-- wp:group {"className":"kc-daycard","layout":{"type":"default"}} -->
<div class="wp-block-group kc-daycard"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-daycard__photo"} -->
<figure class="wp-block-image size-full kc-daycard__photo"><img src="<?php echo koori_coldstore_img( 'day-dawn.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_y01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kc-daycard__time"} -->
<p class="kc-daycard__time"><?php echo esc_html( koori_coldstore_t( 'day1_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-daycard__text"} -->
<p class="kc-daycard__text"><?php echo esc_html( koori_coldstore_t( 'day1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-daycard","layout":{"type":"default"}} -->
<div class="wp-block-group kc-daycard"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-daycard__photo"} -->
<figure class="wp-block-image size-full kc-daycard__photo"><img src="<?php echo koori_coldstore_img( 'day-plant.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_y02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kc-daycard__time"} -->
<p class="kc-daycard__time"><?php echo esc_html( koori_coldstore_t( 'day2_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-daycard__text"} -->
<p class="kc-daycard__text"><?php echo esc_html( koori_coldstore_t( 'day2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-daycard kc-daycard--text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-daycard kc-daycard--text"><!-- wp:paragraph {"className":"kc-daycard__time"} -->
<p class="kc-daycard__time"><?php echo esc_html( koori_coldstore_t( 'day3_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-daycard__text"} -->
<p class="kc-daycard__text"><?php echo esc_html( koori_coldstore_t( 'day3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kc-daycard","layout":{"type":"default"}} -->
<div class="wp-block-group kc-daycard"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-daycard__photo"} -->
<figure class="wp-block-image size-full kc-daycard__photo"><img src="<?php echo koori_coldstore_img( 'day-night.webp' ); ?>" alt="<?php echo esc_attr( koori_coldstore_t( 'alt_y05' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kc-daycard__time"} -->
<p class="kc-daycard__time"><?php echo esc_html( koori_coldstore_t( 'day4_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-daycard__text"} -->
<p class="kc-daycard__text"><?php echo esc_html( koori_coldstore_t( 'day4_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
