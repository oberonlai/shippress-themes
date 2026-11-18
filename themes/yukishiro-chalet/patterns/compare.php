<?php
/**
 * Title: Home: package comparison
 * Slug: yukishiro-chalet/compare
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: A full-width table comparing the six packages by nights, lift pass, meals, guide and price.
 */
?>
<!-- wp:group {"tagName":"section","className":"yk-sec yk-compare","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-compare"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'compare_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title"} -->
<h2 class="wp-block-heading yk-title"><?php echo esc_html( yukishiro_chalet_t( 'compare_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"yk-lede"} -->
<p class="yk-lede"><?php echo esc_html( yukishiro_chalet_t( 'compare_lede' ) ); ?> <a href="/compare/"><?php echo esc_html( yukishiro_chalet_t( 'compare_more' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:table {"hasFixedLayout":true,"className":"yk-table"} -->
<figure class="wp-block-table yk-table"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( yukishiro_chalet_t( 'th_pkg' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></th><th><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></th><th class="yk-from"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></th></tr></thead><tbody><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n1' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>7</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass6' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€1,640</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n2' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>3</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass2' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€690</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n3' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>5</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass_school' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€1,280</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n4' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>7</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass_summer' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_guide3' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€1,120</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n5' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>4</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass_summer' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_guide_huts' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€860</td></tr><tr><td class="yk-pk"><?php echo esc_html( yukishiro_chalet_t( 'cmp_n6' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_nights' ) ); ?></span>3</td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_pass' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'cmp_pass_summer' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_meals' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'yes' ) ); ?></td><td><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_guide' ) ); ?></span><?php echo esc_html( yukishiro_chalet_t( 'dash' ) ); ?></td><td class="yk-from"><span class="yk-lab"><?php echo esc_html( yukishiro_chalet_t( 'th_from' ) ); ?></span>€480</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"yk-more"} -->
<p class="yk-more"><a href="/compare/"><?php echo esc_html( yukishiro_chalet_t( 'compare_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
