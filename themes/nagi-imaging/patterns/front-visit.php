<?php
/**
 * Title: Home: visit and news
 * Slug: nagi-imaging/front-visit
 * Categories: nagi-imaging
 * Keywords: imaging, clinic, radiology
 * Viewport Width: 1440
 * Description: Top and bottom halves: reception photograph with strips and the address, then three news rows on light grey.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nagi-sec nagi-visit__top","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nagi-sec nagi-visit__top">
<!-- wp:group {"className":"nagi-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-wrap">
<!-- wp:paragraph {"className":"nagi-label"} -->
<p class="nagi-label"><?php echo wp_kses_post( nagi_imaging_t( 'ka1ba2570' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"nagi-word"} -->
<h2 class="wp-block-heading nagi-word"><?php echo wp_kses_post( nagi_imaging_t( 'k5e706a9b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"nagi-visit__grid","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-visit__grid">
<!-- wp:group {"className":"nagi-visit__fig","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-visit__fig">
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"nagi-frame nagi-p17 sp-parallax nagi-par-5"} -->
<figure class="wp-block-image size-large nagi-frame nagi-p17 sp-parallax nagi-par-5"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p17-reception.webp' ) ); ?>" alt="<?php echo esc_attr( nagi_imaging_t( 'a19becfe0' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"nagi-strips nagi-strips--abs nagi-strips--visit"} -->
<p class="nagi-strips nagi-strips--abs nagi-strips--visit"><span class="nagi-strip"><?php echo wp_kses_post( nagi_imaging_t( 'kcd3c8777' ) ); ?></span><span class="nagi-strip"><?php echo wp_kses_post( nagi_imaging_t( 'kd52df925' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"nagi-visit__text","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-visit__text">
<!-- wp:paragraph {"className":"nagi-addr"} -->
<p class="nagi-addr"><?php echo wp_kses_post( nagi_imaging_t( 'k1311f295' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-contact"} -->
<p class="nagi-contact"><?php echo wp_kses_post( nagi_imaging_t( 'kbcc254b5' ) ); ?> <a href="tel:+35315550148">+353 1 555 0148</a><br><?php echo wp_kses_post( nagi_imaging_t( 'k14eac323' ) ); ?> <a href="mailto:referrals@nagi-imaging.example"><?php echo wp_kses_post( nagi_imaging_t( 'k3f13c865' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-contact__note"} -->
<p class="nagi-contact__note"><?php echo wp_kses_post( nagi_imaging_t( 'k748e3558' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-arrowlink"} -->
<p class="nagi-arrowlink"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo wp_kses_post( nagi_imaging_t( 'kc559fa72' ) ); ?><span class="nagi-circle" aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nagi-sec nagi-visit__news","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nagi-sec nagi-visit__news">
<!-- wp:group {"className":"nagi-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-wrap">
<!-- wp:paragraph {"className":"nagi-label"} -->
<p class="nagi-label"><?php echo wp_kses_post( nagi_imaging_t( 'kdd1ba187' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nagi-newsrows","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-newsrows">
<!-- wp:group {"className":"nagi-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-newsrow">
<!-- wp:paragraph {"className":"nagi-newsrow__date"} -->
<p class="nagi-newsrow__date">28.10.2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__tag"} -->
<p class="nagi-newsrow__tag"><?php echo wp_kses_post( nagi_imaging_t( 'k1dd1c5fb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__title"} -->
<p class="nagi-newsrow__title"><a href="<?php echo esc_url( home_url( '/ct-now-until-1900-on-weekdays/' ) ); ?>"><?php echo wp_kses_post( nagi_imaging_t( 'k5f2d7c22' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__go"} -->
<p class="nagi-newsrow__go"><a class="nagi-circle" href="<?php echo esc_url( home_url( '/ct-now-until-1900-on-weekdays/' ) ); ?>" aria-label="<?php echo esc_attr( nagi_imaging_t( 'a5f2d7c22' ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"nagi-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-newsrow">
<!-- wp:paragraph {"className":"nagi-newsrow__date"} -->
<p class="nagi-newsrow__date">15.10.2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__tag"} -->
<p class="nagi-newsrow__tag"><?php echo wp_kses_post( nagi_imaging_t( 'k16f3f82c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__title"} -->
<p class="nagi-newsrow__title"><a href="<?php echo esc_url( home_url( '/saturday-mornings-ultrasound-and-x-ray/' ) ); ?>"><?php echo wp_kses_post( nagi_imaging_t( 'kd3af0a68' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__go"} -->
<p class="nagi-newsrow__go"><a class="nagi-circle" href="<?php echo esc_url( home_url( '/saturday-mornings-ultrasound-and-x-ray/' ) ); ?>" aria-label="<?php echo esc_attr( nagi_imaging_t( 'ad3af0a68' ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"nagi-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-newsrow">
<!-- wp:paragraph {"className":"nagi-newsrow__date"} -->
<p class="nagi-newsrow__date">02.10.2026</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__tag"} -->
<p class="nagi-newsrow__tag"><?php echo wp_kses_post( nagi_imaging_t( 'k16f3f82c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__title"} -->
<p class="nagi-newsrow__title"><a href="<?php echo esc_url( home_url( '/dexa-and-mammography-in-one-visit/' ) ); ?>"><?php echo wp_kses_post( nagi_imaging_t( 'kef8f16e5' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-newsrow__go"} -->
<p class="nagi-newsrow__go"><a class="nagi-circle" href="<?php echo esc_url( home_url( '/dexa-and-mammography-in-one-visit/' ) ); ?>" aria-label="<?php echo esc_attr( nagi_imaging_t( 'aef8f16e5' ) ); ?>">→</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
