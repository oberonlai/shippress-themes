<?php
/**
 * Title: Page: The crate head
 * Slug: enban-records/page-crate-head
 * Categories: enban-records
 * Inserter: no
 * Description: The crate: head card and the page-local filter bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec eb-sec--first eb-sec--head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec eb-sec--first eb-sec--head"><!-- wp:group {"className":"eb-phead","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead"><!-- wp:group {"className":"eb-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead__text"><!-- wp:paragraph {"className":"eb-eyebrow"} -->
<p class="eb-eyebrow"><?php echo wp_kses_post( enban_records_t( 'ka0d0ebc3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"eb-h1 eb-phead__title"} -->
<h1 class="wp-block-heading eb-h1 eb-phead__title"><?php echo wp_kses_post( enban_records_t( 'k73a22443' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"eb-lede"} -->
<p class="eb-lede"><?php echo wp_kses_post( enban_records_t( 'k93370b28' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-phead__card sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead__card sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo enban_records_img( 'hands-flipping.webp' ); ?>" alt="<?php echo esc_attr( enban_records_t( 'a90cc7792' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"eb-bar eb-bar--local","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull eb-bar eb-bar--local"><!-- wp:group {"className":"eb-bar__in","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group eb-bar__in"><!-- wp:paragraph {"className":"eb-bar__label"} -->
<p class="eb-bar__label"><?php echo wp_kses_post( enban_records_t( 'kefaf7868' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-bar__links"} -->
<p class="eb-bar__links"><a href="/crate/?product_cat=lp"><?php echo wp_kses_post( enban_records_t( 'k233724c5' ) ); ?></a> <span class="eb-bar__sep">/</span> <a href="/crate/?product_cat=7-inch"><?php echo wp_kses_post( enban_records_t( 'k6fac6cb5' ) ); ?></a> <span class="eb-bar__sep">/</span> <a href="/crate/?product_tag=dub-reissues"><?php echo wp_kses_post( enban_records_t( 'kd2b3fb8f' ) ); ?></a> <span class="eb-bar__sep">/</span> <a href="/crate/?product_tag=under-20"><?php echo wp_kses_post( enban_records_t( 'k5a07b9c3' ) ); ?></a> <span class="eb-bar__sep">/</span> <a href="/crate/?product_tag=new-arrival"><?php echo wp_kses_post( enban_records_t( 'k6a8ee421' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
