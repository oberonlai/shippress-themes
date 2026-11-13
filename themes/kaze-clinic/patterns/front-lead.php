<?php
/**
 * Title: Home: colour-flip lead statement
 * Slug: kaze-clinic/front-lead
 * Categories: kaze-clinic
 * Keywords: lead, statement
 * Viewport Width: 1440
 * Description: A full-bleed band: a grey statement on the pale ground turns white as a wide photograph fades in behind it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-lead sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-lead sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-lead__photo sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full kz-lead__photo sp-reveal sp-reveal--zoom"><img src="<?php echo kaze_clinic_img( 'lead-plan' ); ?>" alt="<?php echo esc_attr( kaze_clinic_t( 'alt_lead-plan' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"kz-lead__text","layout":{"type":"default"}} -->
<div class="wp-block-group kz-lead__text"><!-- wp:paragraph {"className":"kz-label"} -->
<p class="kz-label"><?php echo esc_html( kaze_clinic_t( 'lead_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-lead__p"} -->
<p class="kz-lead__p"><?php echo esc_html( kaze_clinic_t( 'lead_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-link"} -->
<p class="kz-link"><a href="/first-visit/"><?php echo esc_html( kaze_clinic_t( 'lead_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
