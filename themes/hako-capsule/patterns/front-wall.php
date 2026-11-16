<?php
/**
 * Title: Home: pod-bay wall
 * Slug: hako-capsule/front-wall
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Description: Five ruled cells flush to both edges of the page: square photograph, label pill, name, spec, price and a 48px square arrow box.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--wall","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--wall"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'wall_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-wall sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-wall sp-reveal sp-reveal--up"><!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-cell__img"} -->
<figure class="wp-block-image size-full hk-cell__img"><img src="<?php echo hako_capsule_img( 'p02-standard-pod.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w1_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'w1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'w1_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'w1_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'wall_see' ) . ' ' . hako_capsule_t( 'w1_name' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-cell__img"} -->
<figure class="wp-block-image size-full hk-cell__img"><img src="<?php echo hako_capsule_img( 'p03-wide-pod.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w2_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'w2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'w2_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'w2_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'wall_see' ) . ' ' . hako_capsule_t( 'w2_name' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-cell__img"} -->
<figure class="wp-block-image size-full hk-cell__img"><img src="<?php echo hako_capsule_img( 'p04-quiet-floor.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w3_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'w3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'w3_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'w3_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'wall_see' ) . ' ' . hako_capsule_t( 'w3_name' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-cell__img"} -->
<figure class="wp-block-image size-full hk-cell__img"><img src="<?php echo hako_capsule_img( 'p05-single-cabin.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'w4_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'w4_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'w4_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'w4_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/pods/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'wall_see' ) . ' ' . hako_capsule_t( 'w4_name' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-cell__img"} -->
<figure class="wp-block-image size-full hk-cell__img"><img src="<?php echo hako_capsule_img( 'p06-shower-room.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-chip hk-chip--ink"} -->
<p class="hk-chip hk-chip--ink"><?php echo esc_html( hako_capsule_t( 'w5_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'w5_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'w5_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'w5_price' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/showers/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'wall_see' ) . ' ' . hako_capsule_t( 'w5_name' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
