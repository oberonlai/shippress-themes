<?php
/**
 * Title: Home: showroom photograph with two square tiles on its corners
 * Slug: seiwa-furniture/front-showroom
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: A centred parallax photograph with two square tiles overlapping its corners, and a centred text block under it.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sw-sec sw-band sw-showroom","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sw-sec sw-band sw-showroom"><!-- wp:group {"className":"sw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sw-wrap"><!-- wp:group {"className":"sw-label","layout":{"type":"default"}} -->
<div class="wp-block-group sw-label"><!-- wp:paragraph {"className":"sw-label__w"} -->
<p class="sw-label__w"><?php echo esc_html( seiwa_furniture_t( 'show_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-label__c"} -->
<p class="sw-label__c"><?php echo esc_html( seiwa_furniture_t( 'show_cap' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-show","layout":{"type":"default"}} -->
<div class="wp-block-group sw-show"><!-- wp:group {"className":"sw-show__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sw-show__ph"><!-- wp:group {"className":"sp-parallax sw-show__main","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax sw-show__main"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/showroom-wide.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P10' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-tile sw-tile--a"} -->
<figure class="wp-block-image size-full sw-tile sw-tile--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tile-sample-kit.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P11' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-tile sw-tile--b"} -->
<figure class="wp-block-image size-full sw-tile sw-tile--b"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tile-castor-fit.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P12' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-show__tx","layout":{"type":"default"}} -->
<div class="wp-block-group sw-show__tx"><!-- wp:paragraph {"className":"sw-show__p"} -->
<p class="sw-show__p"><?php echo esc_html( seiwa_furniture_t( 'show_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-show__p"} -->
<p class="sw-show__p"><?php echo esc_html( seiwa_furniture_t( 'show_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-show__facts"} -->
<p class="sw-show__facts"><?php echo esc_html( seiwa_furniture_t( 'show_facts' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-more sw-more--c"} -->
<p class="sw-more sw-more--c"><a href="/showroom/"><?php echo esc_html( seiwa_furniture_t( 'show_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
