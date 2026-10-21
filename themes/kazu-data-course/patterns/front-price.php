<?php
/**
 * Title: Home: price
 * Slug: kazu-data-course/front-price
 * Categories: kazu-data-course
 * Keywords: course, data, lessons
 * Viewport Width: 1440
 * Description: The one price card and the full price table.
 */
?>
<!-- wp:group {"className":"kz-sec kz-price-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull kz-sec kz-price-sec"><!-- wp:group {"className":"kz-col kz-col--center","layout":{"type":"default"}} -->
<div class="wp-block-group kz-col kz-col--center"><!-- wp:paragraph {"className":"kz-eyebrow"} -->
<p class="kz-eyebrow"><?php echo esc_html( kazu_t( 'pr_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><?php echo esc_html( kazu_t( 'pr_title' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-card kz-pricecard","layout":{"type":"default"}} -->
<div class="wp-block-group kz-card kz-pricecard"><!-- wp:paragraph {"className":"kz-pill"} -->
<p class="kz-pill"><?php echo esc_html( kazu_t( 'pr_pill' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-pricecard__name","level":3} -->
<h3 class="wp-block-heading kz-pricecard__name"><?php echo esc_html( kazu_t( 'pr_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-bignum"} -->
<p class="kz-bignum"><?php echo esc_html( kazu_t( 'pr_num' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"kz-checks"} -->
<ul class="wp-block-list kz-checks"><!-- wp:list-item -->
<li><?php echo esc_html( kazu_t( 'pr_inc1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kazu_t( 'pr_inc2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kazu_t( 'pr_inc3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kazu_t( 'pr_inc4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"className":"kz-pricecard__btn","layout":{"type":"flex"}} -->
<div class="wp-block-buttons kz-pricecard__btn"><!-- wp:button {"className":""} -->
<div class="wp-block-button "><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( kazu_buy_url() ); ?>"><?php echo esc_html( kazu_t( 'pr_btn' ) ); ?></a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-wide kz-tablewrap","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wide kz-tablewrap"><!-- wp:heading {"className":"kz-h3","level":3} -->
<h3 class="wp-block-heading kz-h3"><?php echo esc_html( kazu_t( 'pr_all' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false,"className":"kz-table"} -->
<figure class="wp-block-table kz-table"><table><thead><tr><th><?php echo esc_html( kazu_t( 'th_item' ) ); ?></th><th><?php echo esc_html( kazu_t( 'th_inc' ) ); ?></th><th><?php echo esc_html( kazu_t( 'th_acc' ) ); ?></th><th><?php echo esc_html( kazu_t( 'th_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( kazu_t( 'pt1' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt1i' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt1a' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt1p' ) ); ?></td></tr><tr><td><?php echo esc_html( kazu_t( 'pt2' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt2i' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt2a' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt2p' ) ); ?></td></tr><tr><td><?php echo esc_html( kazu_t( 'pt3' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt3i' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt3a' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt3p' ) ); ?></td></tr><tr><td><?php echo esc_html( kazu_t( 'pt4' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt4i' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt4a' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt4p' ) ); ?></td></tr><tr><td><?php echo esc_html( kazu_t( 'pt5' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt5i' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt5a' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt5p' ) ); ?></td></tr><tr><td><?php echo esc_html( kazu_t( 'pt6' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt6i' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt6a' ) ); ?></td><td><?php echo esc_html( kazu_t( 'pt6p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
