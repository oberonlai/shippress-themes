<?php
/**
 * Title: Home: test households
 * Slug: shizuku-filter/front-stories
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: Two photo rows and one text capsule quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"stories","className":"sf-sec ","layout":{"type":"default"}} -->
<section id="stories" class="wp-block-group alignfull sf-sec ">
<!-- wp:paragraph {"className":"sf-rail"} -->
<p class="sf-rail"><span><?php echo wp_kses_post( shizuku_filter_t( 'st_label' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sf-body","layout":{"type":"default"}} -->
<div class="wp-block-group sf-body">
<!-- wp:heading {"className":"sf-kv sp-reveal sp-reveal--wipe sf-wipe"} -->
<h2 class="wp-block-heading sf-kv sp-reveal sp-reveal--wipe sf-wipe"><span><?php echo wp_kses_post( shizuku_filter_t( 'st_h' ) ); ?></span></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"sf-story  sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-story  sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sf-story__ph"} -->
<figure class="wp-block-image size-full sf-story__ph"><img src="<?php shizuku_filter_img( '09-story-family-kitchen.webp' ); ?>" alt="<?php shizuku_filter_a( 'st1_alt' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"sf-story__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sf-story__txt">
<!-- wp:heading {"level":3,"className":"sf-story__h"} -->
<h3 class="wp-block-heading sf-story__h"><?php echo wp_kses_post( shizuku_filter_t( 'st1_n' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sf-story__w"} -->
<p class="sf-story__w"><?php echo wp_kses_post( shizuku_filter_t( 'st1_w' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuku_filter_t( 'st1_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuku_filter_t( 'st1_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-story__q"} -->
<p class="sf-story__q"><?php echo wp_kses_post( shizuku_filter_t( 'st1_q' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-story sf-story--rev sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-story sf-story--rev sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sf-story__ph"} -->
<figure class="wp-block-image size-full sf-story__ph"><img src="<?php shizuku_filter_img( '10-story-studio-pantry.webp' ); ?>" alt="<?php shizuku_filter_a( 'st2_alt' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"sf-story__txt","layout":{"type":"default"}} -->
<div class="wp-block-group sf-story__txt">
<!-- wp:heading {"level":3,"className":"sf-story__h"} -->
<h3 class="wp-block-heading sf-story__h"><?php echo wp_kses_post( shizuku_filter_t( 'st2_n' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sf-story__w"} -->
<p class="sf-story__w"><?php echo wp_kses_post( shizuku_filter_t( 'st2_w' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuku_filter_t( 'st2_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuku_filter_t( 'st2_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-story__q"} -->
<p class="sf-story__q"><?php echo wp_kses_post( shizuku_filter_t( 'st2_q' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-story sf-story--cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-story sf-story--cap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3,"className":"sf-story__h"} -->
<h3 class="wp-block-heading sf-story__h"><?php echo wp_kses_post( shizuku_filter_t( 'st3_n' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sf-story__w"} -->
<p class="sf-story__w"><?php echo wp_kses_post( shizuku_filter_t( 'st3_w' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-story__q"} -->
<p class="sf-story__q"><?php echo wp_kses_post( shizuku_filter_t( 'st3_q' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
