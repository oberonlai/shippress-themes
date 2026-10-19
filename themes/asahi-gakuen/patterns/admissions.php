<?php
/**
 * Title: Home: admissions
 * Slug: asahi-gakuen/admissions
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: Admissions dates as a ruled table, with a visit day booking button and the guide link.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"admissions","className":"ag-ad","align":"full","layout":{"type":"default"}} -->
<section id="admissions" class="wp-block-group alignfull ag-ad">
<!-- wp:group {"className":"ag-ad__intro","layout":{"type":"default"}} -->
<div class="wp-block-group ag-ad__intro"><!-- wp:paragraph {"className":"ag-label"} -->
<p class="ag-label"><?php echo esc_html( asahi_gakuen_t( 'ad_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ag-sec__title"} -->
<h2 class="wp-block-heading ag-sec__title"><?php echo esc_html( asahi_gakuen_t( 'ad_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ag-ad__lead"} -->
<p class="ag-ad__lead"><?php echo esc_html( asahi_gakuen_t( 'ad_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<p class="ag-ad__acts"><a class="ag-ad__btn" href="/contact/"><?php echo esc_html( asahi_gakuen_t( 'ad_btn' ) ); ?> <span aria-hidden="true">&rarr;</span></a><a class="ag-ad__l2" href="/academics/"><?php echo esc_html( asahi_gakuen_t( 'ad_l2' ) ); ?></a></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<table class="ag-ad__t"><thead><tr><th scope="col"><?php echo esc_html( asahi_gakuen_t( 'ad_h1' ) ); ?></th><th scope="col"><?php echo esc_html( asahi_gakuen_t( 'ad_h2' ) ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html( asahi_gakuen_t( 'ad1_t' ) ); ?></th><td><?php echo esc_html( asahi_gakuen_t( 'ad1_d' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( asahi_gakuen_t( 'ad2_t' ) ); ?></th><td><?php echo esc_html( asahi_gakuen_t( 'ad2_d' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( asahi_gakuen_t( 'ad3_t' ) ); ?></th><td><?php echo esc_html( asahi_gakuen_t( 'ad3_d' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( asahi_gakuen_t( 'ad4_t' ) ); ?></th><td><?php echo esc_html( asahi_gakuen_t( 'ad4_d' ) ); ?></td></tr><tr><th scope="row"><?php echo esc_html( asahi_gakuen_t( 'ad5_t' ) ); ?></th><td><?php echo esc_html( asahi_gakuen_t( 'ad5_d' ) ); ?></td></tr></tbody></table>
<!-- /wp:html --></section>
<!-- /wp:group -->
