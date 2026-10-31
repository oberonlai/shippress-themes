<?php
/**
 * Title: Home: ring-field hero with a masked photograph and a month timeline
 * Slug: hibana-college/front-hero
 * Categories: hibana-college
 * Viewport Width: 1440
 * Description: Dark first screen: thin drifting weld-ripple rings, a left headline and lead with a round arrow, a tall masked photograph that runs past the fold, a six-tick month timeline and a rotated cohort label.
 */
?>
<!-- wp:group {"className":"hc-hero","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hc-hero">
<!-- wp:html -->
<div class="hc-rings" aria-hidden="true"><div class="hc-rings__a"></div><div class="hc-rings__b"></div><div class="hc-rings__c"></div><div class="hc-embers"></div></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hc-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__copy">
<!-- wp:heading {"level":1,"className":"hc-hero__title"} -->
<h1 class="wp-block-heading hc-hero__title"><?php echo wp_kses_post( hibana_college_t( 'hero_h1_1' ) ); ?><br><?php echo wp_kses_post( hibana_college_t( 'hero_h1_2' ) ); ?><br><?php echo wp_kses_post( hibana_college_t( 'hero_h1_3' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-hero__lead"} -->
<p class="hc-hero__lead"><?php echo wp_kses_post( hibana_college_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-arrow"} -->
<p class="hc-arrow"><a href="#months"><?php echo wp_kses_post( hibana_college_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group hc-hero__photo sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-hero__img"} -->
<figure class="wp-block-image size-full hc-hero__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k1.webp' ) ); ?>" alt="<?php echo esc_attr( hibana_college_t( 'alt_k1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"hc-timeline"} -->
<ul class="wp-block-list hc-timeline"><!-- wp:list-item -->
<li><span class="hc-tl__n"><span class="hc-tl__m"><?php echo wp_kses_post( hibana_college_t( 'tl_month' ) ); ?> </span>1</span><span class="hc-tl__t"><?php echo wp_kses_post( hibana_college_t( 'tl_1' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="hc-tl__n"><span class="hc-tl__m"><?php echo wp_kses_post( hibana_college_t( 'tl_month' ) ); ?> </span>2</span><span class="hc-tl__t"><?php echo wp_kses_post( hibana_college_t( 'tl_2' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="hc-tl__n"><span class="hc-tl__m"><?php echo wp_kses_post( hibana_college_t( 'tl_month' ) ); ?> </span>3</span><span class="hc-tl__t"><?php echo wp_kses_post( hibana_college_t( 'tl_3' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="hc-tl__n"><span class="hc-tl__m"><?php echo wp_kses_post( hibana_college_t( 'tl_month' ) ); ?> </span>4</span><span class="hc-tl__t"><?php echo wp_kses_post( hibana_college_t( 'tl_4' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="hc-tl__n"><span class="hc-tl__m"><?php echo wp_kses_post( hibana_college_t( 'tl_month' ) ); ?> </span>5</span><span class="hc-tl__t"><?php echo wp_kses_post( hibana_college_t( 'tl_5' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="hc-tl__n"><span class="hc-tl__m"><?php echo wp_kses_post( hibana_college_t( 'tl_month' ) ); ?> </span>6</span><span class="hc-tl__t"><?php echo wp_kses_post( hibana_college_t( 'tl_6' ) ); ?></span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"hc-tl__names"} -->
<p class="hc-tl__names">1 <?php echo wp_kses_post( hibana_college_t( 'tl_1' ) ); ?> · 2 <?php echo wp_kses_post( hibana_college_t( 'tl_2' ) ); ?> · 3 <?php echo wp_kses_post( hibana_college_t( 'tl_3' ) ); ?> · 4 <?php echo wp_kses_post( hibana_college_t( 'tl_4' ) ); ?> · 5 <?php echo wp_kses_post( hibana_college_t( 'tl_5' ) ); ?> · 6 <?php echo wp_kses_post( hibana_college_t( 'tl_6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-rail"} -->
<p class="hc-rail"><span><?php echo wp_kses_post( hibana_college_t( 'rail' ) ); ?></span></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
