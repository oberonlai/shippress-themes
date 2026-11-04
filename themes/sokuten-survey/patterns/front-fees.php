<?php
/**
 * Title: Home: fees, hours and area
 * Slug: sokuten-survey/front-fees
 * Categories: sokuten-survey
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ss-sec ss-feesec","tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section id="fees" class="wp-block-group alignfull ss-sec ss-feesec">
<!-- wp:paragraph {"className":"ss-eyebrow"} -->
<p class="ss-eyebrow"><?php echo esc_html( sokuten_survey_t( 'eb_fees' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ss-h2"} -->
<h2 class="wp-block-heading ss-h2"><?php echo esc_html( sokuten_survey_t( 'fees_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ss-intro"} -->
<p class="ss-intro"><?php echo esc_html( sokuten_survey_t( 'fees_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"ss-fees"} -->
<figure class="wp-block-table ss-fees"><table><thead><tr><th><?php echo esc_html( sokuten_survey_t( 'fee_th1' ) ); ?></th><th><?php echo esc_html( sokuten_survey_t( 'fee_th2' ) ); ?></th><th><?php echo esc_html( sokuten_survey_t( 'fee_th3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( sokuten_survey_t( 'fee1_a' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee1_b' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee1_c' ) ); ?></td></tr><tr><td><?php echo esc_html( sokuten_survey_t( 'fee2_a' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee2_b' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee2_c' ) ); ?></td></tr><tr><td><?php echo esc_html( sokuten_survey_t( 'fee3_a' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee3_b' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee3_c' ) ); ?></td></tr><tr><td><?php echo esc_html( sokuten_survey_t( 'fee4_a' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee4_b' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee4_c' ) ); ?></td></tr><tr><td><?php echo esc_html( sokuten_survey_t( 'fee5_a' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee5_b' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee5_c' ) ); ?></td></tr><tr><td><?php echo esc_html( sokuten_survey_t( 'fee6_a' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee6_b' ) ); ?></td><td><?php echo esc_html( sokuten_survey_t( 'fee6_c' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"ss-fees__note"} -->
<p class="ss-fees__note"><?php echo esc_html( sokuten_survey_t( 'fees_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ss-btn-wrap","layout":{"type":"flex"}} -->
<div class="wp-block-buttons ss-btn-wrap"><!-- wp:button {"className":"is-style-outline ss-btn"} -->
<div class="wp-block-button is-style-outline ss-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/fees/' ) ); ?>"><?php echo esc_html( sokuten_survey_t( 'fees_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
