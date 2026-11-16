<?php
/**
 * Title: Home: this Saturday’s stalls
 * Slug: hinata-market/stalls-strip
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Description: A horizontally scrolling strip of six stall cards and an end card.
 */
?>
<!-- wp:group {"anchor":"stalls","tagName":"section","className":"hm-sec hm-stalls","layout":{"type":"default"},"align":"full"} -->
<section id="stalls" class="wp-block-group alignfull hm-sec hm-stalls"><!-- wp:group {"className":"hm-dots hm-dots--cut","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots hm-dots--cut"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group hm-sechead"><!-- wp:heading {"level":2,"className":"hm-h2"} -->
<h2 class="wp-block-heading hm-h2"><?php echo esc_html( hinata_market_t( 'strip_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-sechead__note"} -->
<p class="hm-sechead__note"><?php echo esc_html( hinata_market_t( 'strip_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-strip sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hm-strip sp-reveal sp-reveal--up"><!-- wp:group {"className":"hm-card","layout":{"type":"default"}} -->
<div class="wp-block-group hm-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-card__photo"} -->
<figure class="wp-block-image size-full hm-card__photo"><img src="<?php echo hinata_market_img( 'stall-greens.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hm-card__code"} -->
<p class="hm-card__code"><span class="hm-pill-s"><?php echo esc_html( hinata_market_t( 'st_a3_code' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hm-card__name"} -->
<h3 class="wp-block-heading hm-card__name"><?php echo esc_html( hinata_market_t( 'st_a3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-card__line"} -->
<p class="hm-card__line"><?php echo esc_html( hinata_market_t( 'st_a3_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-card__tag"} -->
<p class="hm-card__tag"><span class="hm-new hm-new--leaf"><?php echo esc_html( hinata_market_t( 'st_a3_tag' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-card","layout":{"type":"default"}} -->
<div class="wp-block-group hm-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-card__photo"} -->
<figure class="wp-block-image size-full hm-card__photo"><img src="<?php echo hinata_market_img( 'stall-eggs.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_s2' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hm-card__code"} -->
<p class="hm-card__code"><span class="hm-pill-s"><?php echo esc_html( hinata_market_t( 'st_a8_code' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hm-card__name"} -->
<h3 class="wp-block-heading hm-card__name"><?php echo esc_html( hinata_market_t( 'st_a8_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-card__line"} -->
<p class="hm-card__line"><?php echo esc_html( hinata_market_t( 'st_a8_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-card","layout":{"type":"default"}} -->
<div class="wp-block-group hm-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-card__photo"} -->
<figure class="wp-block-image size-full hm-card__photo"><img src="<?php echo hinata_market_img( 'stall-bread.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_s3' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hm-card__code"} -->
<p class="hm-card__code"><span class="hm-pill-s"><?php echo esc_html( hinata_market_t( 'st_b2_code' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hm-card__name"} -->
<h3 class="wp-block-heading hm-card__name"><?php echo esc_html( hinata_market_t( 'st_b2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-card__line"} -->
<p class="hm-card__line"><?php echo esc_html( hinata_market_t( 'st_b2_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-card","layout":{"type":"default"}} -->
<div class="wp-block-group hm-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-card__photo"} -->
<figure class="wp-block-image size-full hm-card__photo"><img src="<?php echo hinata_market_img( 'stall-orchard.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_s4' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hm-card__code"} -->
<p class="hm-card__code"><span class="hm-pill-s"><?php echo esc_html( hinata_market_t( 'st_b6_code' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hm-card__name"} -->
<h3 class="wp-block-heading hm-card__name"><?php echo esc_html( hinata_market_t( 'st_b6_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-card__line"} -->
<p class="hm-card__line"><?php echo esc_html( hinata_market_t( 'st_b6_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-card__tag"} -->
<p class="hm-card__tag"><span class="hm-new hm-new--leaf"><?php echo esc_html( hinata_market_t( 'st_b6_tag' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-card","layout":{"type":"default"}} -->
<div class="wp-block-group hm-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-card__photo"} -->
<figure class="wp-block-image size-full hm-card__photo"><img src="<?php echo hinata_market_img( 'stall-cheese.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_s5' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hm-card__code"} -->
<p class="hm-card__code"><span class="hm-pill-s"><?php echo esc_html( hinata_market_t( 'st_c4_code' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hm-card__name"} -->
<h3 class="wp-block-heading hm-card__name"><?php echo esc_html( hinata_market_t( 'st_c4_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-card__line"} -->
<p class="hm-card__line"><?php echo esc_html( hinata_market_t( 'st_c4_line' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-card","layout":{"type":"default"}} -->
<div class="wp-block-group hm-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-card__photo"} -->
<figure class="wp-block-image size-full hm-card__photo"><img src="<?php echo hinata_market_img( 'stall-roots.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_s6' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hm-card__code"} -->
<p class="hm-card__code"><span class="hm-pill-s"><?php echo esc_html( hinata_market_t( 'st_d1_code' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hm-card__name"} -->
<h3 class="wp-block-heading hm-card__name"><?php echo esc_html( hinata_market_t( 'st_d1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-card__line"} -->
<p class="hm-card__line"><?php echo esc_html( hinata_market_t( 'st_d1_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-card__tag"} -->
<p class="hm-card__tag"><span class="hm-new hm-new--leaf"><?php echo esc_html( hinata_market_t( 'st_d1_tag' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-card hm-card--end","layout":{"type":"default"}} -->
<div class="wp-block-group hm-card hm-card--end"><!-- wp:paragraph {"className":"hm-card__end"} -->
<p class="hm-card__end"><?php echo esc_html( hinata_market_t( 'strip_end' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-pill hm-pill--s"} -->
<p class="hm-pill hm-pill--s"><a href="<?php echo hinata_market_url( '/stalls/' ); ?>"><?php echo esc_html( hinata_market_t( 'strip_end_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
