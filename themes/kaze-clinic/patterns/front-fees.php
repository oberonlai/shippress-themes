<?php
/**
 * Title: Home: fees snapshot
 * Slug: kaze-clinic/front-fees
 * Categories: kaze-clinic
 * Keywords: fees, prices
 * Viewport Width: 1440
 * Description: A centred 930px block with four price rows (item with clinical subtitle, price at the right) and a link to the full fee list.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec kz-fees-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec kz-fees-sec"><!-- wp:group {"className":"kz-wrap kz-wrap--lead","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--lead"><!-- wp:paragraph {"className":"kz-label"} -->
<p class="kz-label"><?php echo esc_html( kaze_clinic_t( 'fe_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><?php echo esc_html( kaze_clinic_t( 'fe_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"kz-fees","hasFixedLayout":false} -->
<figure class="wp-block-table kz-fees"><table><tbody><tr><td><?php echo esc_html( kaze_clinic_t( 'fe1_t' ) ); ?><br><em><?php echo esc_html( kaze_clinic_t( 'fe1_s' ) ); ?></em></td><td><?php echo esc_html( kaze_clinic_t( 'fe1_pr' ) ); ?></td></tr><tr><td><?php echo esc_html( kaze_clinic_t( 'fe2_t' ) ); ?><br><em><?php echo esc_html( kaze_clinic_t( 'fe2_s' ) ); ?></em></td><td><?php echo esc_html( kaze_clinic_t( 'fe2_pr' ) ); ?></td></tr><tr><td><?php echo esc_html( kaze_clinic_t( 'fe3_t' ) ); ?><br><em><?php echo esc_html( kaze_clinic_t( 'fe3_s' ) ); ?></em></td><td><?php echo esc_html( kaze_clinic_t( 'fe3_pr' ) ); ?></td></tr><tr><td><?php echo esc_html( kaze_clinic_t( 'fe4_t' ) ); ?><br><em><?php echo esc_html( kaze_clinic_t( 'fe4_s' ) ); ?></em></td><td><?php echo esc_html( kaze_clinic_t( 'fe4_pr' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"kz-fees__note"} -->
<p class="kz-fees__note"><?php echo esc_html( kaze_clinic_t( 'fe_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-link"} -->
<p class="kz-link"><a href="/fees/"><?php echo esc_html( kaze_clinic_t( 'fe_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
