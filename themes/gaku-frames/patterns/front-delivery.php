<?php
/**
 * Title: Home: delivered to the wall
 * Slug: gaku-frames/front-delivery
 * Categories: gaku-frames
 * Keywords: delivery, hanging, photo, facts
 * Viewport Width: 1440
 * Description: Split headline, a walnut-framed hanging photograph on the left, two paragraphs and three facts on the right.
 */
?>
<!-- wp:group {"align":"full","className":"gk-sec gk-mitre-field gk-delivery","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-sec gk-mitre-field gk-delivery"><!-- wp:group {"className":"gk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group gk-split sp-stagger"><!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up"><?php echo wp_kses_post( gaku_frames_t( 'k67edd3b9' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gk-split__line2 sp-reveal sp-reveal--up"} -->
<p class="gk-split__line2 sp-reveal sp-reveal--up"><?php echo wp_kses_post( gaku_frames_t( 'kbbc0c98f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-delivery__grid","layout":{"type":"default"}} -->
<div class="wp-block-group gk-delivery__grid"><!-- wp:group {"className":"gk-frame gk-frame--walnut gk-delivery__photo sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gk-frame gk-frame--walnut gk-delivery__photo sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p15-hanging.webp' ) ); ?>" alt="<?php echo esc_attr( gaku_frames_t( 'a7b806854' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-delivery__text","layout":{"type":"default"}} -->
<div class="wp-block-group gk-delivery__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( gaku_frames_t( 'k85bc8c2e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( gaku_frames_t( 'k72dc0c0f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"gk-facts"} -->
<ul class="wp-block-list gk-facts"><!-- wp:list-item -->
<li><strong>$45</strong> <?php echo wp_kses_post( gaku_frames_t( 'k30587e35' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php echo wp_kses_post( gaku_frames_t( 'k994cd776' ) ); ?></strong> <?php echo wp_kses_post( gaku_frames_t( 'k28aff4bb' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong><?php echo wp_kses_post( gaku_frames_t( 'kfbeae63d' ) ); ?></strong> <?php echo wp_kses_post( gaku_frames_t( 'k5f59070d' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
