<?php
/**
 * Title: Home: fees
 * Slug: tabiji-clinic/front-fees
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, vaccination
 * Viewport Width: 1440
 * Description: Six fee rows with dotted rules and nowrap prices.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"tc-fees-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tc-fees-sec"><!-- wp:paragraph {"className":"tc-label"} -->
<p class="tc-label"><?php echo esc_html( tabiji_clinic_t( 'fee_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"tc-h2 tc-h2--left"} -->
<h2 class="wp-block-heading tc-h2 tc-h2--left"><?php echo esc_html( tabiji_clinic_t( 'fee_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:table {"className":"tc-fees"} -->
<figure class="wp-block-table tc-fees"><table><tbody><tr><td><strong><?php echo esc_html( tabiji_clinic_t( 'fee1_n' ) ); ?></strong><br><span class="tc-fees__note"><?php echo esc_html( tabiji_clinic_t( 'fee1_d' ) ); ?></span></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tabiji_clinic_t( 'fee1_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( tabiji_clinic_t( 'fee2_n' ) ); ?></strong><br><span class="tc-fees__note"><?php echo esc_html( tabiji_clinic_t( 'fee2_d' ) ); ?></span></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tabiji_clinic_t( 'fee2_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( tabiji_clinic_t( 'fee3_n' ) ); ?></strong><br><span class="tc-fees__note"><?php echo esc_html( tabiji_clinic_t( 'fee3_d' ) ); ?></span></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tabiji_clinic_t( 'fee3_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( tabiji_clinic_t( 'fee4_n' ) ); ?></strong><br><span class="tc-fees__note"><?php echo esc_html( tabiji_clinic_t( 'fee4_d' ) ); ?></span></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tabiji_clinic_t( 'fee4_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( tabiji_clinic_t( 'fee5_n' ) ); ?></strong><br><span class="tc-fees__note"><?php echo esc_html( tabiji_clinic_t( 'fee5_d' ) ); ?></span></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tabiji_clinic_t( 'fee5_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( tabiji_clinic_t( 'fee6_n' ) ); ?></strong><br><span class="tc-fees__note"><?php echo esc_html( tabiji_clinic_t( 'fee6_d' ) ); ?></span></td><td class="has-text-align-right" data-align="right"><?php echo esc_html( tabiji_clinic_t( 'fee6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --><!-- wp:paragraph {"className":"tc-fees__line"} -->
<p class="tc-fees__line"><?php echo esc_html( tabiji_clinic_t( 'fee_note' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"tc-link"} -->
<p class="tc-link"><a href="/fees/"><?php echo esc_html( tabiji_clinic_t( 'fee_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
