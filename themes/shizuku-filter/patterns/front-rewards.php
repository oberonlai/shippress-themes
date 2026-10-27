<?php
/**
 * Title: Home: rewards capsules
 * Slug: shizuku-filter/front-rewards
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: Six full-pill capsules with price, three check lines and a round ink button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"rewards","className":"sf-sec ","layout":{"type":"default"}} -->
<section id="rewards" class="wp-block-group alignfull sf-sec ">
<!-- wp:paragraph {"className":"sf-rail"} -->
<p class="sf-rail"><span><?php echo wp_kses_post( shizuku_filter_t( 'rew_label' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sf-body","layout":{"type":"default"}} -->
<div class="wp-block-group sf-body">
<!-- wp:heading {"className":"sf-kv sp-reveal sp-reveal--wipe sf-wipe"} -->
<h2 class="wp-block-heading sf-kv sp-reveal sp-reveal--wipe sf-wipe"><span><?php echo wp_kses_post( shizuku_filter_t( 'rew_h' ) ); ?></span></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"sf-caps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sf-caps sp-stagger">
<!-- wp:group {"className":"sf-cap sf-cap--white sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap sf-cap--white sp-reveal sp-reveal--up">
<!-- wp:group {"className":"sf-cap__id","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap__id">
<!-- wp:paragraph {"className":"sf-cap__price"} -->
<p class="sf-cap__price">$12</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-cap__name"} -->
<p class="sf-cap__name"><?php echo wp_kses_post( shizuku_filter_t( 'r1_n' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sf-cap__ph sf-cap__ph--none"} -->
<p class="sf-cap__ph sf-cap__ph--none"></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sf-cap__list"} -->
<ul class="wp-block-list sf-cap__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r1_a' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r1_b' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r1_c' ) ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sf-go"} -->
<p class="sf-go"><a href="#back" aria-label="<?php echo esc_attr( sprintf( shizuku_filter_t( 'go_aria' ), wp_strip_all_tags( shizuku_filter_t( 'r1_n' ) ) ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-cap sf-cap--ground sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap sf-cap--ground sp-reveal sp-reveal--up">
<!-- wp:group {"className":"sf-cap__id","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap__id">
<!-- wp:paragraph {"className":"sf-cap__price"} -->
<p class="sf-cap__price">$36</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-cap__name"} -->
<p class="sf-cap__name"><?php echo wp_kses_post( shizuku_filter_t( 'r2_n' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sf-cap__ph sf-cap__ph--none"} -->
<p class="sf-cap__ph sf-cap__ph--none"></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sf-cap__list"} -->
<ul class="wp-block-list sf-cap__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r2_a' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r2_b' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r2_c' ) ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sf-go"} -->
<p class="sf-go"><a href="#back" aria-label="<?php echo esc_attr( sprintf( shizuku_filter_t( 'go_aria' ), wp_strip_all_tags( shizuku_filter_t( 'r2_n' ) ) ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-cap sf-cap--main sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap sf-cap--main sp-reveal sp-reveal--up">
<!-- wp:group {"className":"sf-cap__id","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap__id">
<!-- wp:paragraph {"className":"sf-cap__price"} -->
<p class="sf-cap__price">$89</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-cap__name"} -->
<p class="sf-cap__name"><?php echo wp_kses_post( shizuku_filter_t( 'r3_n' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-cap__left"} -->
<p class="sf-cap__left"><?php echo wp_kses_post( shizuku_filter_t( 'r3_left' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sf-cap__ph"} -->
<figure class="wp-block-image size-full sf-cap__ph"><img src="<?php shizuku_filter_img( '05-reward-filter-single.webp' ); ?>" alt="<?php shizuku_filter_a( 'r3_alt' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:list {"className":"sf-cap__list"} -->
<ul class="wp-block-list sf-cap__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r3_a' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r3_b' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r3_c' ) ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sf-go"} -->
<p class="sf-go"><a href="#back" aria-label="<?php echo esc_attr( sprintf( shizuku_filter_t( 'go_aria' ), wp_strip_all_tags( shizuku_filter_t( 'r3_n' ) ) ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-cap sf-cap--aux sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap sf-cap--aux sp-reveal sp-reveal--up">
<!-- wp:group {"className":"sf-cap__id","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap__id">
<!-- wp:paragraph {"className":"sf-cap__price"} -->
<p class="sf-cap__price">$109</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-cap__name"} -->
<p class="sf-cap__name"><?php echo wp_kses_post( shizuku_filter_t( 'r4_n' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sf-cap__ph sf-cap__ph--none"} -->
<p class="sf-cap__ph sf-cap__ph--none"></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sf-cap__list"} -->
<ul class="wp-block-list sf-cap__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r4_a' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r4_b' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r4_c' ) ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sf-go"} -->
<p class="sf-go"><a href="#back" aria-label="<?php echo esc_attr( sprintf( shizuku_filter_t( 'go_aria' ), wp_strip_all_tags( shizuku_filter_t( 'r4_n' ) ) ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-cap sf-cap--white sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap sf-cap--white sp-reveal sp-reveal--up">
<!-- wp:group {"className":"sf-cap__id","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap__id">
<!-- wp:paragraph {"className":"sf-cap__price"} -->
<p class="sf-cap__price">$139</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-cap__name"} -->
<p class="sf-cap__name"><?php echo wp_kses_post( shizuku_filter_t( 'r5_n' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sf-cap__ph"} -->
<figure class="wp-block-image size-full sf-cap__ph"><img src="<?php shizuku_filter_img( '06-reward-filter-set.webp' ); ?>" alt="<?php shizuku_filter_a( 'r5_alt' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:list {"className":"sf-cap__list"} -->
<ul class="wp-block-list sf-cap__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r5_a' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r5_b' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r5_c' ) ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sf-go"} -->
<p class="sf-go"><a href="#back" aria-label="<?php echo esc_attr( sprintf( shizuku_filter_t( 'go_aria' ), wp_strip_all_tags( shizuku_filter_t( 'r5_n' ) ) ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-cap sf-cap--aux sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap sf-cap--aux sp-reveal sp-reveal--up">
<!-- wp:group {"className":"sf-cap__id","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cap__id">
<!-- wp:paragraph {"className":"sf-cap__price"} -->
<p class="sf-cap__price">$229</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-cap__name"} -->
<p class="sf-cap__name"><?php echo wp_kses_post( shizuku_filter_t( 'r6_n' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sf-cap__ph"} -->
<figure class="wp-block-image size-full sf-cap__ph"><img src="<?php shizuku_filter_img( '15-packing-boxes.webp' ); ?>" alt="<?php shizuku_filter_a( 'r6_alt' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:list {"className":"sf-cap__list"} -->
<ul class="wp-block-list sf-cap__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r6_a' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r6_b' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( shizuku_filter_t( 'r6_c' ) ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sf-go"} -->
<p class="sf-go"><a href="#back" aria-label="<?php echo esc_attr( sprintf( shizuku_filter_t( 'go_aria' ), wp_strip_all_tags( shizuku_filter_t( 'r6_n' ) ) ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
