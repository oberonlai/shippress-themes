<?php
/**
 * Title: Home: workshop process
 * Slug: hayate-cycles/front-process
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: Lead paragraph with five hairline process lines on the left and a tall capsule portrait on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-section hc-section--process","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-section hc-section--process">
<!-- wp:group {"className":"hc-process","layout":{"type":"default"}} -->
<div class="wp-block-group hc-process">
<!-- wp:group {"className":"hc-process__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-process__text">
<!-- wp:heading {"className":"hc-title"} -->
<h2 class="wp-block-heading hc-title"><?php echo esc_html( hayate_cycles_t( 'proc_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sub"} -->
<p class="hc-sub"><?php echo esc_html( hayate_cycles_t( 'proc_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-process__lead"} -->
<p class="hc-process__lead"><?php echo esc_html( hayate_cycles_t( 'proc_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-lines sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hc-lines sp-stagger">
<!-- wp:paragraph {"className":"hc-line sp-reveal sp-reveal--up"} -->
<p class="hc-line sp-reveal sp-reveal--up"><span class="hc-line__n">01</span><?php echo esc_html( hayate_cycles_t( 'proc_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-line sp-reveal sp-reveal--up"} -->
<p class="hc-line sp-reveal sp-reveal--up"><span class="hc-line__n">02</span><?php echo esc_html( hayate_cycles_t( 'proc_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-line sp-reveal sp-reveal--up"} -->
<p class="hc-line sp-reveal sp-reveal--up"><span class="hc-line__n">03</span><?php echo esc_html( hayate_cycles_t( 'proc_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-line sp-reveal sp-reveal--up"} -->
<p class="hc-line sp-reveal sp-reveal--up"><span class="hc-line__n">04</span><?php echo esc_html( hayate_cycles_t( 'proc_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-line sp-reveal sp-reveal--up"} -->
<p class="hc-line sp-reveal sp-reveal--up"><span class="hc-line__n">05</span><?php echo esc_html( hayate_cycles_t( 'proc_5' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-process__media","layout":{"type":"default"}} -->
<div class="wp-block-group hc-process__media">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-capsule hc-capsule--tall sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full hc-capsule hc-capsule--tall sp-reveal sp-reveal--wipe"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s10-mechanic.webp' ) ); ?>" alt="<?php echo esc_attr( hayate_cycles_t( 'alt_s10' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
