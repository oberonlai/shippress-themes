<?php
/**
 * Title: Home: featured project card and project register
 * Slug: seiwa-furniture/front-projects
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: A featured outlined card running to the right edge, then four hairline register rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sw-sec sw-projects","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sw-sec sw-projects"><!-- wp:group {"className":"sw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sw-wrap"><!-- wp:group {"className":"sw-label","layout":{"type":"default"}} -->
<div class="wp-block-group sw-label"><!-- wp:paragraph {"className":"sw-label__w"} -->
<p class="sw-label__w"><?php echo esc_html( seiwa_furniture_t( 'proj_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-label__c"} -->
<p class="sw-label__c"><?php echo esc_html( seiwa_furniture_t( 'proj_cap' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-cards","layout":{"type":"default"}} -->
<div class="wp-block-group sw-cards"><!-- wp:group {"className":"sw-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sw-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"sw-card__tx","layout":{"type":"default"}} -->
<div class="wp-block-group sw-card__tx"><!-- wp:paragraph {"className":"sw-kick"} -->
<p class="sw-kick"><?php echo esc_html( seiwa_furniture_t( 'proj_k' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"sw-card__t"} -->
<h3 class="wp-block-heading sw-card__t"><?php echo esc_html( seiwa_furniture_t( 'proj_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sw-card__b"} -->
<p class="sw-card__b"><?php echo esc_html( seiwa_furniture_t( 'proj_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-more"} -->
<p class="sw-more"><a href="/projects/"><?php echo esc_html( seiwa_furniture_t( 'proj_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-card__ln"} -->
<figure class="wp-block-image size-full sw-card__ln"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/line-swatch-tape.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sw-card__ph"} -->
<figure class="wp-block-image size-full sw-card__ph"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/case-night-install.webp' ) ); ?>" alt="<?php echo esc_attr( seiwa_furniture_t( 'alt_P13' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sw-wrap"><!-- wp:group {"className":"sw-reg","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg"><!-- wp:group {"className":"sw-reg__r sw-reg__r--h","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg__r sw-reg__r--h"><!-- wp:paragraph -->
<p><?php echo esc_html( seiwa_furniture_t( 'reg_h_y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( seiwa_furniture_t( 'reg_h_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( seiwa_furniture_t( 'reg_h_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-reg__s"} -->
<p class="sw-reg__s"><?php echo esc_html( seiwa_furniture_t( 'reg_h_s' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-reg__r","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg__r"><!-- wp:paragraph {"className":"sw-reg__y"} -->
<p class="sw-reg__y"><?php echo esc_html( seiwa_furniture_t( 'reg1_y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sw-reg__pj","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg__pj"><!-- wp:paragraph {"className":"sw-reg__pt"} -->
<p class="sw-reg__pt"><?php echo esc_html( seiwa_furniture_t( 'reg1_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-reg__px"} -->
<p class="sw-reg__px"><?php echo esc_html( seiwa_furniture_t( 'reg1_x' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sw-reg__c"} -->
<p class="sw-reg__c"><?php echo esc_html( seiwa_furniture_t( 'reg1_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-reg__s"} -->
<p class="sw-reg__s"><?php echo esc_html( seiwa_furniture_t( 'reg1_s' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-reg__r","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg__r"><!-- wp:paragraph {"className":"sw-reg__y"} -->
<p class="sw-reg__y"><?php echo esc_html( seiwa_furniture_t( 'reg2_y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sw-reg__pj","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg__pj"><!-- wp:paragraph {"className":"sw-reg__pt"} -->
<p class="sw-reg__pt"><?php echo esc_html( seiwa_furniture_t( 'reg2_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-reg__px"} -->
<p class="sw-reg__px"><?php echo esc_html( seiwa_furniture_t( 'reg2_x' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sw-reg__c"} -->
<p class="sw-reg__c"><?php echo esc_html( seiwa_furniture_t( 'reg2_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-reg__s"} -->
<p class="sw-reg__s"><?php echo esc_html( seiwa_furniture_t( 'reg2_s' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-reg__r","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg__r"><!-- wp:paragraph {"className":"sw-reg__y"} -->
<p class="sw-reg__y"><?php echo esc_html( seiwa_furniture_t( 'reg3_y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sw-reg__pj","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg__pj"><!-- wp:paragraph {"className":"sw-reg__pt"} -->
<p class="sw-reg__pt"><?php echo esc_html( seiwa_furniture_t( 'reg3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-reg__px"} -->
<p class="sw-reg__px"><?php echo esc_html( seiwa_furniture_t( 'reg3_x' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sw-reg__c"} -->
<p class="sw-reg__c"><?php echo esc_html( seiwa_furniture_t( 'reg3_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-reg__s"} -->
<p class="sw-reg__s"><?php echo esc_html( seiwa_furniture_t( 'reg3_s' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sw-reg__r","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg__r"><!-- wp:paragraph {"className":"sw-reg__y"} -->
<p class="sw-reg__y"><?php echo esc_html( seiwa_furniture_t( 'reg4_y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sw-reg__pj","layout":{"type":"default"}} -->
<div class="wp-block-group sw-reg__pj"><!-- wp:paragraph {"className":"sw-reg__pt"} -->
<p class="sw-reg__pt"><?php echo esc_html( seiwa_furniture_t( 'reg4_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-reg__px"} -->
<p class="sw-reg__px"><?php echo esc_html( seiwa_furniture_t( 'reg4_x' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sw-reg__c"} -->
<p class="sw-reg__c"><?php echo esc_html( seiwa_furniture_t( 'reg4_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-reg__s"} -->
<p class="sw-reg__s"><?php echo esc_html( seiwa_furniture_t( 'reg4_s' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
