<?php
/**
 * Title: Home: fee list
 * Slug: hibana-college/front-fees
 * Categories: hibana-college
 * Viewport Width: 1440
 * Description: Ruled fee list of five items with the price column on the right, and a payment note.
 */
?>
<!-- wp:group {"className":"hc-sec hc-feesec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hc-sec hc-feesec">
<!-- wp:group {"className":"hc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hc-wrap">
<!-- wp:group {"className":"hc-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head sp-reveal sp-reveal--up">
<!-- wp:group {"className":"hc-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hc-head__main">
<!-- wp:heading {"level":2,"className":"hc-head__title"} -->
<h2 class="wp-block-heading hc-head__title"><?php echo wp_kses_post( hibana_college_t( 'fees_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-head__sub"} -->
<p class="hc-head__sub"><?php echo wp_kses_post( hibana_college_t( 'fees_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-more"} -->
<p class="hc-more"><a href="/fees/"><?php echo wp_kses_post( hibana_college_t( 'more_detail' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"hc-fees"} -->
<figure class="wp-block-table hc-fees"><table class="has-fixed-layout"><thead><tr><th><?php echo wp_kses_post( hibana_college_t( 'fees_c1' ) ); ?></th><th><?php echo wp_kses_post( hibana_college_t( 'fees_c2' ) ); ?></th><th class="hc-fee"><?php echo wp_kses_post( hibana_college_t( 'fees_c3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( hibana_college_t( 'fee1_n' ) ); ?></td><td><?php echo wp_kses_post( hibana_college_t( 'fee1_l' ) ); ?></td><td class="hc-fee"><?php echo wp_kses_post( hibana_college_t( 'fee1_p' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hibana_college_t( 'fee2_n' ) ); ?></td><td><?php echo wp_kses_post( hibana_college_t( 'fee2_l' ) ); ?></td><td class="hc-fee"><?php echo wp_kses_post( hibana_college_t( 'fee2_p' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hibana_college_t( 'fee3_n' ) ); ?></td><td><?php echo wp_kses_post( hibana_college_t( 'fee3_l' ) ); ?></td><td class="hc-fee"><?php echo wp_kses_post( hibana_college_t( 'fee3_p' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hibana_college_t( 'fee4_n' ) ); ?></td><td><?php echo wp_kses_post( hibana_college_t( 'fee4_l' ) ); ?></td><td class="hc-fee"><?php echo wp_kses_post( hibana_college_t( 'fee4_p' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( hibana_college_t( 'fee5_n' ) ); ?></td><td><?php echo wp_kses_post( hibana_college_t( 'fee5_l' ) ); ?></td><td class="hc-fee"><?php echo wp_kses_post( hibana_college_t( 'fee5_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"hc-fees__note"} -->
<p class="hc-fees__note"><?php echo wp_kses_post( hibana_college_t( 'fees_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
