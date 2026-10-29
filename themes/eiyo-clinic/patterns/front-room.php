<?php
/**
 * Title: Home: who is in the room
 * Slug: eiyo-clinic/front-room
 * Categories: eiyo-clinic
 * Keywords: team, people
 * Viewport Width: 1440
 * Description: Paper section with a wide photograph at the left, a paragraph and a plain two-column list of the seven people at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"room","className":"ec-sec ec-room","layout":{"type":"default"}} -->
<section id="room" class="wp-block-group alignfull ec-sec ec-room"><!-- wp:group {"className":"ec-in ec-room__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ec-in ec-room__grid"><!-- wp:group {"className":"ec-room__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ec-room__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ec-ph ec-ph--p12"} -->
<figure class="wp-block-image size-full ec-ph ec-ph--p12"><img src="<?php echo esc_url( eiyo_clinic_img( 'p12' ) ); ?>" alt="<?php echo esc_attr( eiyo_clinic_alts()['p12'] ?? '' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ec-room__text","layout":{"type":"default"}} -->
<div class="wp-block-group ec-room__text"><!-- wp:heading {"className":"ec-h2"} -->
<h2 class="wp-block-heading ec-h2"><?php echo wp_kses_post( eiyo_clinic_t( 'k35efe1e0' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( eiyo_clinic_t( 'k76c875ad' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ec-names","layout":{"type":"default"}} -->
<div class="wp-block-group ec-names"><!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name"><?php echo wp_kses_post( eiyo_clinic_t( 'k79e5cb90' ) ); ?><br><em><?php echo wp_kses_post( eiyo_clinic_t( 'kc2161e60' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name"><?php echo wp_kses_post( eiyo_clinic_t( 'k422a71c3' ) ); ?><br><em><?php echo wp_kses_post( eiyo_clinic_t( 'k56e748b5' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name"><?php echo wp_kses_post( eiyo_clinic_t( 'k7e9da65c' ) ); ?><br><em><?php echo wp_kses_post( eiyo_clinic_t( 'ke72d03af' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name"><?php echo wp_kses_post( eiyo_clinic_t( 'k09e85317' ) ); ?><br><em><?php echo wp_kses_post( eiyo_clinic_t( 'kaddd37eb' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name"><?php echo wp_kses_post( eiyo_clinic_t( 'k322409e0' ) ); ?><br><em><?php echo wp_kses_post( eiyo_clinic_t( 'k70cb2b9a' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name"><?php echo wp_kses_post( eiyo_clinic_t( 'ke16336e3' ) ); ?><br><em><?php echo wp_kses_post( eiyo_clinic_t( 'k0633fde3' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ec-name"} -->
<p class="ec-name"><?php echo wp_kses_post( eiyo_clinic_t( 'k367a28c5' ) ); ?><br><em><?php echo wp_kses_post( eiyo_clinic_t( 'k7ea0de15' ) ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ec-chip"} -->
<div class="wp-block-buttons ec-chip"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/dietitians/' ) ); ?>"><?php echo wp_kses_post( eiyo_clinic_t( 'k2c011ec7' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
