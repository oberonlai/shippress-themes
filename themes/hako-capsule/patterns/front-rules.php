<?php
/**
 * Title: Home: house rules row
 * Slug: hako-capsule/front-rules
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Description: Title band, then a 50/50 row: photograph flush left, eight ruled house rules at the right, and an 84px three-cell foot strip.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--rules","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--rules"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'rules_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-rules__row","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hk-rules__photo"} -->
<figure class="wp-block-image size-full hk-rules__photo"><img src="<?php echo hako_capsule_img( 'p11-lockers.webp' ); ?>" alt="<?php echo hako_capsule_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-rules__list sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__list sp-reveal sp-reveal--up"><!-- wp:list {"ordered":true,"className":"hk-rulelist"} -->
<ol class="wp-block-list hk-rulelist">
<!-- wp:list-item -->
<li><span class="hk-no">01</span><?php echo esc_html( hako_capsule_t( 'r1' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">02</span><?php echo esc_html( hako_capsule_t( 'r2' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">03</span><?php echo esc_html( hako_capsule_t( 'r3' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">04</span><?php echo esc_html( hako_capsule_t( 'r4' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">05</span><?php echo esc_html( hako_capsule_t( 'r5' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">06</span><?php echo esc_html( hako_capsule_t( 'r6' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">07</span><?php echo esc_html( hako_capsule_t( 'r7' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><span class="hk-no">08</span><?php echo esc_html( hako_capsule_t( 'r8' ) ); ?></li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-rules__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-rules__foot"><!-- wp:paragraph {"className":"hk-rules__cell"} -->
<p class="hk-rules__cell"><?php echo esc_html( hako_capsule_t( 'rs_quiet' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell"} -->
<p class="hk-rules__cell"><?php echo esc_html( hako_capsule_t( 'rs_out' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-rules__cell hk-rules__cell--arrow"} -->
<p class="hk-rules__cell hk-rules__cell--arrow"><a href="<?php echo hako_capsule_url( '/house-rules/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'rs_all' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
