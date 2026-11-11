<?php
/**
 * Title: Home: open yard close
 * Slug: kamotsu-academy/front-visit
 * Categories: kamotsu-academy
 * Viewport Width: 1440
 * Description: Open-yard photo beside the closing heading, a short paragraph, address and hours and two navy pills.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"visit","className":"ka-sec ka-visit","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group alignfull ka-sec ka-visit">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ka-visit__grid">
<!-- wp:group {"className":"ka-visit__ph","layout":{"type":"default"}} -->
<div class="wp-block-group ka-visit__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-visit__img"} -->
<figure class="wp-block-image size-full ka-visit__img"><img src="<?php echo kamotsu_academy_img( 'p13-open-yard.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-visit__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-visit__col sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'visit_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'visit_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-visit__body"} -->
<p class="ka-visit__body"><?php echo wp_kses_post( kamotsu_academy_t( 'visit_body' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ka-visit__addr"} -->
<p class="ka-visit__addr"><?php echo wp_kses_post( kamotsu_academy_t( 'visit_addr' ) ); ?><br><?php echo wp_kses_post( kamotsu_academy_t( 'visit_hours' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"ka-visit__btns"} -->
<div class="wp-block-buttons ka-visit__btns">
<!-- wp:button {"className":"ka-pill ka-pill--book"} -->
<div class="wp-block-button ka-pill ka-pill--book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( kamotsu_academy_t( 'visit_b1' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"ka-pill ka-pill--book"} -->
<div class="wp-block-button ka-pill ka-pill--book"><a class="wp-block-button__link wp-element-button" href="/contact/#open-yard"><?php echo wp_kses_post( kamotsu_academy_t( 'visit_b2' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
