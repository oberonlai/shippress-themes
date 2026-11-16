<?php
/**
 * Title: Home: the front page continued
 * Slug: hinata-market/front-more
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Description: The grower rules, three more notice rows with dotted dividers, the editor’s note and a small hours box in the same three ruled columns.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-cols hm-front hm-front--more","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-cols hm-front hm-front--more"><!-- wp:group {"className":"hm-col hm-col--left","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--left"><!-- wp:paragraph {"className":"hm-label"} -->
<p class="hm-label"><span class="hm-label__dot">H</span><span><?php echo esc_html( hinata_market_t( 'stand_label' ) ); ?></span><span class="hm-label__dot">M</span></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true,"className":"hm-rules"} -->
<ol class="wp-block-list hm-rules"><!-- wp:list-item -->
<li><?php echo esc_html( hinata_market_t( 'rule_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hinata_market_t( 'rule_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hinata_market_t( 'rule_3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hinata_market_t( 'rule_4' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hinata_market_t( 'rule_5' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hinata_market_t( 'rule_6' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:group {"className":"hm-box hm-box--notice","layout":{"type":"default"}} -->
<div class="wp-block-group hm-box hm-box--notice"><!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'boxa_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-pill hm-pill--s"} -->
<p class="hm-pill hm-pill--s"><a href="<?php echo hinata_market_url( '/apply/' ); ?>"><?php echo esc_html( hinata_market_t( 'boxa_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-box__tag"} -->
<p class="hm-box__tag"><?php echo esc_html( hinata_market_t( 'box_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-box hm-box--hatch","layout":{"type":"default"}} -->
<div class="wp-block-group hm-box hm-box--hatch"><!-- wp:paragraph {"className":"hm-box__head"} -->
<p class="hm-box__head"><span><?php echo esc_html( hinata_market_t( 'boxb_head' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'boxb_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--mid"><!-- wp:group {"className":"hm-row","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row"><!-- wp:group {"className":"hm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row__text"><!-- wp:heading {"level":3,"className":"hm-row__title"} -->
<h3 class="wp-block-heading hm-row__title"><a href="<?php echo hinata_market_url( '/bicycle-parking-moves-to-the-east-arcade/' ); ?>"><?php echo esc_html( hinata_market_t( 'row2_title' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-row__date"} -->
<p class="hm-row__date"><?php echo esc_html( hinata_market_t( 'row2_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-row__thumb"} -->
<figure class="wp-block-image size-full hm-row__thumb"><img src="<?php echo hinata_market_img( 'notice-bikes.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_n2' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-dots hm-dots--cut","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots hm-dots--cut"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-row","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row"><!-- wp:group {"className":"hm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row__text"><!-- wp:heading {"level":3,"className":"hm-row__title"} -->
<h3 class="wp-block-heading hm-row__title"><a href="<?php echo hinata_market_url( '/soup-saturday-on-5-december-bring-a-bowl/' ); ?>"><?php echo esc_html( hinata_market_t( 'row3_title' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-row__date"} -->
<p class="hm-row__date"><?php echo esc_html( hinata_market_t( 'row3_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-row__thumb"} -->
<figure class="wp-block-image size-full hm-row__thumb"><img src="<?php echo hinata_market_img( 'notice-soup.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_n3' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-dots hm-dots--cut","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots hm-dots--cut"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-row","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row"><!-- wp:group {"className":"hm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row__text"><!-- wp:heading {"level":3,"className":"hm-row__title"} -->
<h3 class="wp-block-heading hm-row__title"><a href="<?php echo hinata_market_url( '/the-knife-sharpener-is-back-on-the-first-saturday-of-each-month/' ); ?>"><?php echo esc_html( hinata_market_t( 'row4_title' ) ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-row__date"} -->
<p class="hm-row__date"><?php echo esc_html( hinata_market_t( 'row4_date' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hm-row__thumb"} -->
<figure class="wp-block-image size-full hm-row__thumb"><img src="<?php echo hinata_market_img( 'notice-knives.webp' ); ?>" alt="<?php echo hinata_market_a( 'alt_n4' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-dots","layout":{"type":"default"}} -->
<div class="wp-block-group hm-dots"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-center","layout":{"type":"default"}} -->
<div class="wp-block-group hm-center"><!-- wp:paragraph {"className":"hm-pill hm-pill--l"} -->
<p class="hm-pill hm-pill--l"><a href="<?php echo hinata_market_url( '/notices/' ); ?>"><?php echo esc_html( hinata_market_t( 'all_notices' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--right","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--right"><!-- wp:paragraph {"className":"hm-label hm-label--double"} -->
<p class="hm-label hm-label--double"><?php echo esc_html( hinata_market_t( 'notes_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'front_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-sign"} -->
<p class="hm-sign"><?php echo esc_html( hinata_market_t( 'front_sign' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-hours","layout":{"type":"default"}} -->
<div class="wp-block-group hm-hours"><!-- wp:group {"className":"hm-kv","layout":{"type":"default"}} -->
<div class="wp-block-group hm-kv"><!-- wp:paragraph {"className":"hm-kv__k"} -->
<p class="hm-kv__k"><?php echo esc_html( hinata_market_t( 'hr1_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-kv__v"} -->
<p class="hm-kv__v"><?php echo esc_html( hinata_market_t( 'hr1_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-kv","layout":{"type":"default"}} -->
<div class="wp-block-group hm-kv"><!-- wp:paragraph {"className":"hm-kv__k"} -->
<p class="hm-kv__k"><?php echo esc_html( hinata_market_t( 'hr2_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-kv__v"} -->
<p class="hm-kv__v"><?php echo esc_html( hinata_market_t( 'hr2_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-kv","layout":{"type":"default"}} -->
<div class="wp-block-group hm-kv"><!-- wp:paragraph {"className":"hm-kv__k"} -->
<p class="hm-kv__k"><?php echo esc_html( hinata_market_t( 'hr3_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-kv__v"} -->
<p class="hm-kv__v"><?php echo esc_html( hinata_market_t( 'hr3_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
