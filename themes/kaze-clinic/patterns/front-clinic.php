<?php
/**
 * Title: Home: clinic and hours
 * Slug: kaze-clinic/front-clinic
 * Categories: kaze-clinic
 * Keywords: hours, visit
 * Viewport Width: 1440
 * Description: A 6/12 photograph of the waiting area and, at the right, the address, a stacking hours table, phone and the accessibility line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec kz-clinic","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec kz-clinic"><!-- wp:group {"className":"kz-wrap kz-wrap--split","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--split"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-clinic__img sp-reveal sp-reveal--up"} -->
<figure class="wp-block-image size-full kz-clinic__img sp-reveal sp-reveal--up"><img src="<?php echo kaze_clinic_img( 'clinic-waiting' ); ?>" alt="<?php echo esc_attr( kaze_clinic_t( 'alt_clinic-waiting' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kz-clinic__body","layout":{"type":"default"}} -->
<div class="wp-block-group kz-clinic__body"><!-- wp:paragraph {"className":"kz-label"} -->
<p class="kz-label"><?php echo esc_html( kaze_clinic_t( 'ch_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><?php echo esc_html( kaze_clinic_t( 'ch_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-clinic__addr"} -->
<p class="kz-clinic__addr"><?php echo esc_html( kaze_clinic_t( 'ch_addr' ) ); ?><br><?php echo esc_html( kaze_clinic_t( 'ch_phone' ) ); ?><br><?php echo esc_html( kaze_clinic_t( 'ch_email' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"kz-hours","hasFixedLayout":false} -->
<figure class="wp-block-table kz-hours"><table><tbody><tr><td><?php echo esc_html( kaze_clinic_t( 'ch_d1' ) ); ?></td><td><?php echo esc_html( kaze_clinic_t( 'ch_h1' ) ); ?></td></tr><tr><td><?php echo esc_html( kaze_clinic_t( 'ch_d2' ) ); ?></td><td><?php echo esc_html( kaze_clinic_t( 'ch_h2' ) ); ?></td></tr><tr><td><?php echo esc_html( kaze_clinic_t( 'ch_d3' ) ); ?></td><td><?php echo esc_html( kaze_clinic_t( 'ch_h3' ) ); ?></td></tr><tr><td><?php echo esc_html( kaze_clinic_t( 'ch_d4' ) ); ?></td><td><?php echo esc_html( kaze_clinic_t( 'ch_h4' ) ); ?></td></tr><tr><td><?php echo esc_html( kaze_clinic_t( 'ch_d5' ) ); ?></td><td><?php echo esc_html( kaze_clinic_t( 'ch_h5' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"kz-clinic__note"} -->
<p class="kz-clinic__note"><?php echo esc_html( kaze_clinic_t( 'ch_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-link"} -->
<p class="kz-link"><a href="/book/"><?php echo esc_html( kaze_clinic_t( 'ch_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
