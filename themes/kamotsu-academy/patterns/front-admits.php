<?php
/**
 * Title: Home: sticky photo with four admission rows
 * Slug: kamotsu-academy/front-admits
 * Categories: kamotsu-academy
 * Viewport Width: 1440
 * Description: A sticky 4:5 photo at the left, the heading, a narrative paragraph and four white numbered rows at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"admits","className":"ka-sec ka-adm","layout":{"type":"default"}} -->
<section id="admits" class="wp-block-group alignfull ka-sec ka-adm">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-adm__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__grid">
<!-- wp:group {"className":"ka-adm__ph","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-adm__img"} -->
<figure class="wp-block-image size-full ka-adm__img"><img src="<?php echo kamotsu_academy_img( 'p08-enrolment-desk.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-adm__col","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__col">
<!-- wp:group {"className":"ka-adm__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__head sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'adm_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'adm_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-adm__body"} -->
<p class="ka-adm__body"><?php echo wp_kses_post( kamotsu_academy_t( 'adm_body' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-adm__rows","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__rows">
<!-- wp:group {"className":"ka-adm__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-adm__n"} -->
<p class="ka-adm__n">01</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"ka-adm__rt","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__rt">
<!-- wp:heading {"level":3,"className":"ka-adm__t"} -->
<h3 class="wp-block-heading ka-adm__t"><?php echo wp_kses_post( kamotsu_academy_t( 'adm1_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-adm__d"} -->
<p class="ka-adm__d"><?php echo wp_kses_post( kamotsu_academy_t( 'adm1_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-adm__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-adm__n"} -->
<p class="ka-adm__n">02</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"ka-adm__rt","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__rt">
<!-- wp:heading {"level":3,"className":"ka-adm__t"} -->
<h3 class="wp-block-heading ka-adm__t"><?php echo wp_kses_post( kamotsu_academy_t( 'adm2_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-adm__d"} -->
<p class="ka-adm__d"><?php echo wp_kses_post( kamotsu_academy_t( 'adm2_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-adm__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-adm__n"} -->
<p class="ka-adm__n">03</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"ka-adm__rt","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__rt">
<!-- wp:heading {"level":3,"className":"ka-adm__t"} -->
<h3 class="wp-block-heading ka-adm__t"><?php echo wp_kses_post( kamotsu_academy_t( 'adm3_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-adm__d"} -->
<p class="ka-adm__d"><?php echo wp_kses_post( kamotsu_academy_t( 'adm3_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-adm__row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__row sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-adm__n"} -->
<p class="ka-adm__n">04</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"ka-adm__rt","layout":{"type":"default"}} -->
<div class="wp-block-group ka-adm__rt">
<!-- wp:heading {"level":3,"className":"ka-adm__t"} -->
<h3 class="wp-block-heading ka-adm__t"><?php echo wp_kses_post( kamotsu_academy_t( 'adm4_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-adm__d"} -->
<p class="ka-adm__d"><?php echo wp_kses_post( kamotsu_academy_t( 'adm4_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
