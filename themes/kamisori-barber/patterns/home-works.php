<?php
/**
 * Title: Home: the services as long-column chapters
 * Slug: kamisori-barber/home-works
 * Categories: kamisori-barber
 * Keywords: barber, barbershop, shave
 * Viewport Width: 1440
 * Description: The services in one long column: the intro with a drop cap and a pull quote, then four numbered chapters whose torn, taped paper-cut pictures hang out into the margins.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-section kb-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-feature"><!-- wp:group {"align": "wide", "className": "kb-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kb-spread"><!-- wp:group {"className": "kb-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-spread__intro"><!-- wp:paragraph {"className": "kb-eyebrow"} -->
<p class="kb-eyebrow"><?php echo esc_html( kamisori_barber_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kb-sec__title kb-feature__title"} -->
<h2 class="wp-block-heading kb-sec__title kb-feature__title"><?php echo esc_html( kamisori_barber_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-dropcap"} -->
<p class="kb-dropcap"><?php echo esc_html( kamisori_barber_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kb-pull"} -->
<p class="kb-pull"><?php echo esc_html( kamisori_barber_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-piece kb-spread__img"} -->
<figure class="wp-block-image size-full kb-piece kb-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/towels.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "kb-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kb-rooms"><!-- wp:group {"className": "kb-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-room__img"} -->
<figure class="wp-block-image size-full kb-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-cut.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_legal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kb-room__title"} -->
<h3 class="wp-block-heading kb-room__title"><?php echo esc_html( kamisori_barber_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-room__facts"} -->
<p class="kb-room__facts"><?php echo esc_html( kamisori_barber_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kb-room__text"} -->
<p class="kb-room__text"><?php echo esc_html( kamisori_barber_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kb-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-room__img"} -->
<figure class="wp-block-image size-full kb-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-shave.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kb-room__title"} -->
<h3 class="wp-block-heading kb-room__title"><?php echo esc_html( kamisori_barber_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-room__facts"} -->
<p class="kb-room__facts"><?php echo esc_html( kamisori_barber_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kb-room__text"} -->
<p class="kb-room__text"><?php echo esc_html( kamisori_barber_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kb-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-room__img"} -->
<figure class="wp-block-image size-full kb-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-razor.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kb-room__title"} -->
<h3 class="wp-block-heading kb-room__title"><?php echo esc_html( kamisori_barber_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-room__facts"} -->
<p class="kb-room__facts"><?php echo esc_html( kamisori_barber_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kb-room__text"} -->
<p class="kb-room__text"><?php echo esc_html( kamisori_barber_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kb-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-room__img"} -->
<figure class="wp-block-image size-full kb-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-wash.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kb-room__title"} -->
<h3 class="wp-block-heading kb-room__title"><?php echo esc_html( kamisori_barber_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-room__facts"} -->
<p class="kb-room__facts"><?php echo esc_html( kamisori_barber_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kb-room__text"} -->
<p class="kb-room__text"><?php echo esc_html( kamisori_barber_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "kb-more"} -->
<div class="wp-block-buttons kb-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( kamisori_barber_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
