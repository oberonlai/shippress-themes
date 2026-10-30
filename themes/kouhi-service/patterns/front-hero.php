<?php
/**
 * Title: Home: hero banner
 * Slug: kouhi-service/front-hero
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: Wide rounded documentary photo that crossfades between two frames, dash bars, round arrows and the info bar with the headline.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-hero-wrap","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ks-hero-wrap"><!-- wp:html -->
<div class="ks-hero">
<div class="ks-hero__stage"><div class="ks-hero__photo sp-parallax" style="--sp-par:8%"><div class="sp-parallax__layer"><img class="ks-hero__a" src="<?php echo kouhi_service_img( 'p01-hero-a.webp' ); ?>" alt="<?php echo esc_attr( kouhi_service_t( 'alt_P01' ) ); ?>" width="1568" height="672" fetchpriority="high"/><span class="ks-hero__bwrap" aria-hidden="true"><img class="ks-hero__b" src="<?php echo kouhi_service_img( 'p02-hero-b.webp' ); ?>" alt="" width="1280" height="533"/></span></div></div>
<span class="ks-arrow ks-arrow--l" aria-hidden="true"><svg viewBox="0 0 20 20" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4l-6 6 6 6"/></svg></span><span class="ks-arrow ks-arrow--r" aria-hidden="true"><svg viewBox="0 0 20 20" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8 4l6 6-6 6"/></svg></span></div>
<div class="ks-hero__info"><div class="ks-hero__side"><span class="ks-dashes" aria-hidden="true"><i class="ks-dash ks-dash--a"></i><i class="ks-dash ks-dash--b"></i></span><p class="ks-hero__kicker"><?php echo esc_html( kouhi_service_t( 'hero_kicker' ) ); ?></p></div>
<div class="ks-hero__main"><h1 class="ks-hero__h1"><?php echo esc_html( kouhi_service_t( 'h1' ) ); ?></h1><p class="ks-hero__lead"><?php echo esc_html( kouhi_service_t( 'hero_lead' ) ); ?></p><div class="ks-hero__cta"><div class="wp-block-buttons"><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#book"><?php echo esc_html( kouhi_service_t( 'cta' ) ); ?></a></div></div><a class="ks-textlink" href="#plans"><?php echo esc_html( kouhi_service_t( 'hero_link' ) ); ?></a></div></div></div>
</div>
<!-- /wp:html --></section>
<!-- /wp:group -->
