<?php
/**
 * Title: Home: about, scattered photographs round a centred text block
 * Slug: seiwa-furniture/front-about
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: Three masked photographs of different sizes at different heights round a centred text block, with a faint line plan bleeding off the left.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sw-sec sw-about","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sw-sec sw-about"><!-- wp:group {"className":"sw-about__in sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sw-about__in sp-stagger"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-about__plan"} -->
<figure class="wp-block-image size-full sw-about__plan"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/line-office-plan.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sw-ph sw-ph--a sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sw-ph sw-ph--a sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/intro-frame-bolt.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P3' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-ph sw-ph--b sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sw-ph sw-ph--b sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/intro-foam-stretch.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-ph__ln"} -->
<figure class="wp-block-image size-full sw-ph__ln"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/line-castor.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-about__tx","layout":{"type":"default"}} -->
<div class="wp-block-group sw-about__tx"><!-- wp:group {"className":"sw-label","layout":{"type":"default"}} -->
<div class="wp-block-group sw-label"><!-- wp:paragraph {"className":"sw-label__w"} -->
<p class="sw-label__w"><?php echo esc_html( seiwa_furniture_t( 'about_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-label__c"} -->
<p class="sw-label__c"><?php echo esc_html( seiwa_furniture_t( 'about_cap' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sw-lead"} -->
<p class="sw-lead"><?php echo esc_html( seiwa_furniture_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-about__p"} -->
<p class="sw-about__p"><?php echo esc_html( seiwa_furniture_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-about__p"} -->
<p class="sw-about__p"><?php echo esc_html( seiwa_furniture_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-about__p"} -->
<p class="sw-about__p"><?php echo esc_html( seiwa_furniture_t( 'about_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-more sw-more--c"} -->
<p class="sw-more sw-more--c"><a href="/about/"><?php echo esc_html( seiwa_furniture_t( 'about_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-ph sw-ph--c sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sw-ph sw-ph--c sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/intro-plan-review.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P5' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
