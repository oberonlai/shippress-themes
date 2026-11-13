<?php
/**
 * Title: Home: who stays with the case
 * Slug: kaze-clinic/front-stays
 * Categories: kaze-clinic
 * Keywords: proof, card
 * Viewport Width: 1440
 * Description: A mist band holding a white card with the proof statement and a photograph at the right, and under it three composite stories with plain titles and clinical subtitles.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec kz-stays","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec kz-stays"><!-- wp:group {"className":"kz-wrap kz-wrap--card","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--card"><!-- wp:group {"className":"kz-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"kz-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group kz-card__text"><!-- wp:paragraph {"className":"kz-label"} -->
<p class="kz-label"><?php echo esc_html( kaze_clinic_t( 'sw_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kz-h2"} -->
<h2 class="wp-block-heading kz-h2"><?php echo esc_html( kaze_clinic_t( 'sw_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-card__p"} -->
<p class="kz-card__p"><?php echo esc_html( kaze_clinic_t( 'sw_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-card__names"} -->
<p class="kz-card__names"><?php echo esc_html( kaze_clinic_t( 'sw_names' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-link"} -->
<p class="kz-link"><a href="/clinicians/"><?php echo esc_html( kaze_clinic_t( 'sw_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-card__img"} -->
<figure class="wp-block-image size-full kz-card__img"><img src="<?php echo kaze_clinic_img( 'stays-call' ); ?>" alt="<?php echo esc_attr( kaze_clinic_t( 'alt_stays-call' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kz-label kz-label--stories"} -->
<p class="kz-label kz-label--stories"><?php echo esc_html( kaze_clinic_t( 'sw_stories' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kz-stories sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kz-stories sp-stagger"><!-- wp:group {"className":"kz-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-story sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kz-pair"} -->
<h3 class="wp-block-heading kz-pair"><?php echo esc_html( kaze_clinic_t( 'st1_t' ) ); ?><br><em><?php echo esc_html( kaze_clinic_t( 'st1_s' ) ); ?></em></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-story__p"} -->
<p class="kz-story__p"><?php echo esc_html( kaze_clinic_t( 'st1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-story sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kz-pair"} -->
<h3 class="wp-block-heading kz-pair"><?php echo esc_html( kaze_clinic_t( 'st2_t' ) ); ?><br><em><?php echo esc_html( kaze_clinic_t( 'st2_s' ) ); ?></em></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-story__p"} -->
<p class="kz-story__p"><?php echo esc_html( kaze_clinic_t( 'st2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-story sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"kz-pair"} -->
<h3 class="wp-block-heading kz-pair"><?php echo esc_html( kaze_clinic_t( 'st3_t' ) ); ?><br><em><?php echo esc_html( kaze_clinic_t( 'st3_s' ) ); ?></em></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-story__p"} -->
<p class="kz-story__p"><?php echo esc_html( kaze_clinic_t( 'st3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
