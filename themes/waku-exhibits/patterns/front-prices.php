<?php
/**
 * Title: Home: prices
 * Slug: waku-exhibits/front-prices
 * Categories: waku-exhibits
 * Keywords: exhibition, stand, quote, landing
 * Viewport Width: 1440
 * Description: Seven itemised prices in a full-width table that never scrolls sideways, and what a quote includes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"prices","className":"wk-sec wk-prices-sec","layout":{"type":"constrained"}} -->
<section id="prices" class="wp-block-group alignfull wk-sec wk-prices-sec"><!-- wp:group {"className":"wk-prices__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-prices__head sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"wk-label"} -->
<p class="wk-label"><?php echo esc_html( wk_t( 'pr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"wk-h2"} -->
<h2 class="wp-block-heading wk-h2"><?php echo esc_html( wk_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wk-prices__p"} -->
<p class="wk-prices__p"><?php echo esc_html( wk_t( 'pr_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"wk-prices"} -->
<figure class="wp-block-table wk-prices"><table><thead><tr><th><?php echo esc_html( wk_t( 'pr_th_item' ) ); ?></th><th><?php echo esc_html( wk_t( 'pr_th_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( wk_t( 'pr_1' ) ); ?></td><td><?php echo esc_html( wk_t( 'pr_1_v' ) ); ?></td></tr><tr><td><?php echo esc_html( wk_t( 'pr_2' ) ); ?></td><td><?php echo esc_html( wk_t( 'pr_2_v' ) ); ?></td></tr><tr><td><?php echo esc_html( wk_t( 'pr_3' ) ); ?></td><td><?php echo esc_html( wk_t( 'pr_3_v' ) ); ?></td></tr><tr><td><?php echo esc_html( wk_t( 'pr_4' ) ); ?></td><td><?php echo esc_html( wk_t( 'pr_4_v' ) ); ?></td></tr><tr><td><?php echo esc_html( wk_t( 'pr_5' ) ); ?></td><td><?php echo esc_html( wk_t( 'pr_5_v' ) ); ?></td></tr><tr><td><?php echo esc_html( wk_t( 'pr_6' ) ); ?></td><td><?php echo esc_html( wk_t( 'pr_6_v' ) ); ?></td></tr><tr><td><?php echo esc_html( wk_t( 'pr_7' ) ); ?></td><td><?php echo esc_html( wk_t( 'pr_7_v' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"className":"wk-prices__incl","layout":{"type":"default"}} -->
<div class="wp-block-group wk-prices__incl"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"wk-prices__photo"} -->
<figure class="wp-block-image size-full wk-prices__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p09-samples.webp' ) ); ?>" alt="<?php echo esc_attr( wk_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"wk-prices__list sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group wk-prices__list sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"wk-row__h"} -->
<h3 class="wp-block-heading wk-row__h"><?php echo esc_html( wk_t( 'inc_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"wk-list"} -->
<ul class="wp-block-list wk-list"><!-- wp:list-item -->
<li><?php echo esc_html( wk_t( 'inc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( wk_t( 'inc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( wk_t( 'inc_3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( wk_t( 'inc_4' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( wk_t( 'inc_5' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"wk-cta"} -->
<p class="wk-cta"><span class="wk-cta__dot" aria-hidden="true">•</span> <a href="/contact/#request"><?php echo esc_html( wk_t( 'pr_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
