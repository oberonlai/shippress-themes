<?php
/**
 * Title: Home: instructors, group photo and hairline list
 * Slug: kamotsu-academy/front-people
 * Categories: kamotsu-academy
 * Viewport Width: 1440
 * Description: A 3:2 group photo of the instructors beside a heading and a hairline list of the five staff.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"people","className":"ka-sec ka-ppl","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group alignfull ka-sec ka-ppl">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-ppl__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ka-ppl__grid">
<!-- wp:group {"className":"ka-ppl__ph","layout":{"type":"default"}} -->
<div class="wp-block-group ka-ppl__ph">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ka-ppl__img"} -->
<figure class="wp-block-image size-full ka-ppl__img"><img src="<?php echo kamotsu_academy_img( 'p14-instructors.webp' ); ?>" alt="<?php echo kamotsu_academy_a( 'alt_p14' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ka-ppl__col sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ka-ppl__col sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'ppl_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'ppl_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<ul class="ka-people"><li><strong><?php echo wp_kses_post( kamotsu_academy_t( 'ppl1_n' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'ppl1_r' ) ); ?></span></li><li><strong><?php echo wp_kses_post( kamotsu_academy_t( 'ppl2_n' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'ppl2_r' ) ); ?></span></li><li><strong><?php echo wp_kses_post( kamotsu_academy_t( 'ppl3_n' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'ppl3_r' ) ); ?></span></li><li><strong><?php echo wp_kses_post( kamotsu_academy_t( 'ppl4_n' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'ppl4_r' ) ); ?></span></li><li><strong><?php echo wp_kses_post( kamotsu_academy_t( 'ppl5_n' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'ppl5_r' ) ); ?></span></li></ul>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"ka-weeks__link ka-weeks__link--l"} -->
<p class="ka-weeks__link ka-weeks__link--l"><a href="/about/"><?php echo wp_kses_post( kamotsu_academy_t( 'ppl_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
