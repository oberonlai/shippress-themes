<?php
/**
 * Title: Home: split photo-left hero with booking bar
 * Slug: kodou-charging/front-hero
 * Categories: kodou-charging
 * Viewport Width: 1440
 * Description: Photograph bleeding to the left edge with a slow parallax, headline and promise beside it on white, and the outlined booking bar underneath.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"kc-sec kc-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull kc-sec kc-hero">
<!-- wp:group {"className":"kc-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__grid">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-hero__photo sp-parallax"} -->
<figure class="wp-block-image size-full kc-hero__photo sp-parallax"><img src="<?php echo kodou_charging_img( 'hero-fitter-column.webp' ); ?>" alt="<?php echo kodou_charging_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"kc-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__text">
<!-- wp:paragraph {"className":"kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo esc_html( kodou_charging_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"kc-hero__h1"} -->
<h1 class="wp-block-heading kc-hero__h1"><?php echo esc_html( kodou_charging_t( 'hero_h1_a' ) ); ?><mark class="has-inline-color has-primary-color" style="background-color:rgba(0,0,0,0)"><?php echo esc_html( kodou_charging_t( 'hero_h1_b' ) ); ?></mark><?php echo esc_html( kodou_charging_t( 'hero_h1_c' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"kc-hero__lede"} -->
<p class="kc-hero__lede"><?php echo esc_html( kodou_charging_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<p class="kc-hero__link"><a href="#assessment"><?php echo esc_html( kodou_charging_t( 'hero_link' ) ); ?> <span aria-hidden="true">↓</span></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-wrap">
<!-- wp:group {"className":"kc-hero__bar","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__bar">
<!-- wp:html -->
<a class="kc-banner kc-banner--bar" href="/contact/"><span class="kc-banner__pic"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" stroke="#2F4A45" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="10" y="4" width="22" height="30" rx="4"/><path d="M22 10l-4 8h5l-3 7"/><path d="M14 38h14"/><path d="M21 34v4"/><path d="M32 22h4c3 0 5 2 5 5v9c0 3 2 5 5 5"/><path d="M44 36l5-1v-3l-5-1z"/><path d="M10 49h26"/><path d="M42 47c0-5 4-8 9-8-0 5-3 9-9 8z" fill="#C8873A" stroke="none"/><path d="M42 49c1-3 3-5 6-6"/></svg></span><span class="kc-banner__facts"><span class="kc-fact"><?php echo esc_html( kodou_charging_t( 'bar_f1' ) ); ?></span><span class="kc-fact"><?php echo esc_html( kodou_charging_t( 'bar_f2' ) ); ?></span><span class="kc-fact"><?php echo esc_html( kodou_charging_t( 'bar_f3' ) ); ?></span></span><span class="kc-banner__label"><?php echo esc_html( kodou_charging_t( 'bar_cta' ) ); ?></span><span class="kc-banner__go"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="20" cy="20" r="19"/><path d="M14 26 26 14M16.5 14H26v9.5"/></svg></span></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
