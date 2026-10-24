<?php
/**
 * Title: Home: contact
 * Slug: hozen-facilities/front-contact
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Pale band with a giant ghost word, a sharp photograph and a blurred one at the margin, and three contact columns.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"contact","className":"hz-contact","layout":{"type":"default"}} -->
<section id="contact" class="wp-block-group alignfull hz-contact">
<!-- wp:paragraph {"className":"hz-ghostword"} -->
<p class="hz-ghostword" aria-hidden="true"><?php echo esc_html( hozen_facilities_t( 'ct_ghost' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hz-ct__top","layout":{"type":"default"}} -->
<div class="wp-block-group hz-ct__top">
<!-- wp:group {"className":"hz-lockup","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'ct_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'ct_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'ct_desc' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hz-linkrow hz-linkrow--narrow"} -->
<p class="hz-linkrow hz-linkrow--narrow"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'ct_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-cluster","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cluster">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-cluster__a sp-reveal sp-reveal--zoom hz-focus"} -->
<figure class="wp-block-image size-full hz-cluster__a sp-reveal sp-reveal--zoom hz-focus"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k1-ceiling.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_k1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-cluster__b"} -->
<figure class="wp-block-image size-full hz-cluster__b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k2-water.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hz-cluster__c"} -->
<figure class="wp-block-image size-full hz-cluster__c"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/k3-valve.webp' ) ); ?>" alt="<?php echo esc_attr( hozen_facilities_t( 'alt_k3' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-ctcols","layout":{"type":"default"}} -->
<div class="wp-block-group hz-ctcols">
<!-- wp:group {"className":"hz-ctcol","layout":{"type":"default"}} -->
<div class="wp-block-group hz-ctcol">
<!-- wp:paragraph {"className":"hz-ctcol__h"} -->
<p class="hz-ctcol__h"><?php echo esc_html( hozen_facilities_t( 'ct_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-ctcol__big"} -->
<p class="hz-ctcol__big"><a href="tel:+31105550198">+31 10 555 0198</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-ctcol__p"} -->
<p class="hz-ctcol__p"><?php echo esc_html( hozen_facilities_t( 'ct_a1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-ctcol","layout":{"type":"default"}} -->
<div class="wp-block-group hz-ctcol">
<!-- wp:paragraph {"className":"hz-ctcol__h"} -->
<p class="hz-ctcol__h"><?php echo esc_html( hozen_facilities_t( 'ct_h2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-ctcol__p"} -->
<p class="hz-ctcol__p"><?php echo wp_kses_post( hozen_facilities_t( 'ct_a2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-ctcol","layout":{"type":"default"}} -->
<div class="wp-block-group hz-ctcol">
<!-- wp:paragraph {"className":"hz-ctcol__h"} -->
<p class="hz-ctcol__h"><?php echo esc_html( hozen_facilities_t( 'ct_h3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-ctcol__mail"} -->
<p class="hz-ctcol__mail"><a href="mailto:desk@hozen-facilities.example">desk@hozen-facilities.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-ctcol__p"} -->
<p class="hz-ctcol__p"><?php echo esc_html( hozen_facilities_t( 'ct_a3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
