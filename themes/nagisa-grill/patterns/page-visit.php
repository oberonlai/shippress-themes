<?php
/**
 * Title: Visit: address and contact form slot
 * Slug: nagisa-grill/page-visit
 * Categories: nagisa-grill
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-harbour.webp' ) ); ?>","alt":"The harbour at dusk with the restaurant windows reflected across calm water.","dimRatio":50,"overlayColor":"scene","isUserOverlayColor":true,"minHeight":62,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full","className":"ng-head sp-parallax","tagName":"section"} -->
<section class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left ng-head sp-parallax" style="min-height:62vh"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( nagisa_grill_t( 'a7bcf9b4b' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13-harbour.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-scene-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"className":"ng-head__t","fontSize":"xx-large"} -->
<h1 class="wp-block-heading ng-head__t has-xx-large-font-size"><?php echo wp_kses_post( nagisa_grill_t( 'k5e706a9b' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ng-infobar"} -->
<div class="wp-block-group ng-infobar"><!-- wp:paragraph {"className":"ng-infobar__l"} -->
<p class="ng-infobar__l"><span class="ng-tick" aria-hidden="true"></span><?php echo wp_kses_post( nagisa_grill_t( 'k39dcfb0e' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-infobar__boat"} -->
<p class="ng-infobar__boat"><?php echo wp_kses_post( nagisa_grill_t( 'k7ad2381e' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div></section>
<!-- /wp:cover -->

<!-- wp:group {"className":"ng-sect ng-prose-sect","tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ng-sect ng-prose-sect"><!-- wp:group {"className":"ng-split"} -->
<div class="wp-block-group ng-split"><!-- wp:group {"className":"ng-split__l"} -->
<div class="wp-block-group ng-split__l"><!-- wp:group {"className":"ng-label"} -->
<div class="wp-block-group ng-label"><!-- wp:html -->
<svg class="ng-tide " viewBox="0 0 60 20" preserveAspectRatio="none" width="60" height="20" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M0 4q3.75 -3.2 7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0M0 10q3.75 -3.2 7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0M0 16q3.75 -3.2 7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0"/></svg>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ng-lede"} -->
<p class="ng-lede"><?php echo wp_kses_post( nagisa_grill_t( 'k33f0c617' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ng-copy-h"} -->
<h3 class="wp-block-heading ng-copy-h"><?php echo wp_kses_post( nagisa_grill_t( 'kf487f489' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nagisa_grill_t( 'kd9ab1cf4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nagisa_grill_t( 'k957754a5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-address"} -->
<p class="ng-address"><?php echo wp_kses_post( nagisa_grill_t( 'ka3342d6c' ) ); ?><br><a href="mailto:table@nagisagrill.example"><?php echo wp_kses_post( nagisa_grill_t( 'k1a875966' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ng-split__r ng-visit-form"} -->
<div class="wp-block-group ng-split__r ng-visit-form"><!-- wp:heading {"level":3,"className":"ng-copy-h"} -->
<h3 class="wp-block-heading ng-copy-h"><?php echo esc_html( nagisa_grill_t( 'contact_email' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nagisa_grill_t( 'k8647f0da' ) ); ?></p>
<!-- /wp:paragraph -->

<?php ob_start(); ?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:table@nagisagrill.example"><?php echo esc_html( nagisa_grill_t( 'contact_email' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<?php $fallback = ob_get_clean(); ?>
<?php echo shippress_form_slot( array(
    'kind' => 'contact',
    'fallback' => $fallback,
) ); ?></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

<!-- wp:group {"className":"ng-scene","tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ng-scene"><!-- wp:group {"className":"ng-scene__head"} -->
<div class="wp-block-group ng-scene__head"><!-- wp:group {"className":"ng-label"} -->
<div class="wp-block-group ng-label"><!-- wp:html -->
<svg class="ng-tide " viewBox="0 0 60 20" preserveAspectRatio="none" width="60" height="20" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M0 4q3.75 -3.2 7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0M0 10q3.75 -3.2 7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0M0 16q3.75 -3.2 7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0t7.5 0"/></svg>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ng-label__t"} -->
<p class="ng-label__t"><?php echo wp_kses_post( nagisa_grill_t( 'kbb7712c0' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:heading {"className":"ng-h-photo","fontSize":"x-large"} -->
<h2 class="wp-block-heading ng-h-photo has-x-large-font-size"><?php echo wp_kses_post( nagisa_grill_t( 'ka6a51dd2' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ng-duo"} -->
<div class="wp-block-group ng-duo"><!-- wp:group {"className":"ng-duo__s sp-parallax"} -->
<div class="wp-block-group ng-duo__s sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-card.webp' ) ); ?>" alt="<?php echo esc_attr( nagisa_grill_t( 'afab84ac4' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ng-duo__lw sp-reveal sp-reveal--mask"} -->
<div class="wp-block-group ng-duo__lw sp-reveal sp-reveal--mask"><!-- wp:group {"className":"ng-duo__l sp-parallax"} -->
<div class="wp-block-group ng-duo__l sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-service.webp' ) ); ?>" alt="<?php echo esc_attr( nagisa_grill_t( 'af3c8e775' ) ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ng-duo__copy"} -->
<div class="wp-block-group ng-duo__copy"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nagisa_grill_t( 'k20ff15bd' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nagisa_grill_t( 'k981b128e' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ng-close"} -->
<div class="wp-block-buttons ng-close"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/tables/"><?php echo wp_kses_post( nagisa_grill_t( 'ka09e00d1' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

