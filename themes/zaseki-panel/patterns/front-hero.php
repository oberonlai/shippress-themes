<?php
/**
 * Title: Home: hero
 * Slug: zaseki-panel/front-hero
 * Categories: zaseki-panel
 * Viewport Width: 1440
 * Description: Three equal columns: a lobby photograph, a solid clay panel with a tilted desk grid, the headline and the pre-order button, and a second photograph; an information bar underneath.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"zp-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull zp-hero">
<!-- wp:group {"className":"zp-hero__photo zp-hero__photo--a sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group zp-hero__photo zp-hero__photo--a sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-hero__img"} -->
<figure class="wp-block-image size-full zp-hero__img"><img src="<?php echo zaseki_panel_img( 'hero-reception-panel.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_h1' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group zp-hero__panel">
<!-- wp:html -->
<div class="zp-gridwrap" aria-hidden="true"><svg class="zp-grid" viewBox="0 0 768 512" preserveAspectRatio="xMidYMid slice" focusable="false"><rect class="zp-cell" x="133" y="133" width="118" height="118" fill="#C3D3C6"/><rect x="261" y="133" width="118" height="118" fill="#D9B3A4"/><rect x="133" y="261" width="118" height="118" fill="#CFCBC1"/><g stroke="#8C5648" stroke-width="10" fill="none"><path d="M0 0V512"/><path d="M128 0V512"/><path d="M256 0V512"/><path d="M384 0V512"/><path d="M512 0V512"/><path d="M640 0V512"/><path d="M768 0V512"/><path d="M0 0 H768"/><path d="M0 128 H768"/><path d="M0 256 H768"/><path d="M0 384 H768"/><path d="M0 512 H768"/></g></svg><svg class="zp-plan" viewBox="0 0 480 280" preserveAspectRatio="xMidYMax slice" focusable="false"><g fill="none" stroke="rgba(140,86,72,.14)" stroke-width="1"><rect x="20" y="40" width="70" height="40"/><rect x="100" y="40" width="70" height="40"/><rect x="180" y="40" width="70" height="40"/><rect x="260" y="40" width="70" height="40"/><rect x="340" y="40" width="70" height="40"/><rect x="20" y="110" width="70" height="40"/><rect x="100" y="110" width="70" height="40"/><rect x="260" y="110" width="70" height="40"/><rect x="340" y="110" width="70" height="40"/><rect x="20" y="180" width="70" height="40"/><rect x="180" y="180" width="70" height="40"/><rect x="260" y="180" width="70" height="40"/><path d="M10 10h460v260H10z"/></g></svg></div>
<!-- /wp:html -->
<!-- wp:group {"className":"zp-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group zp-hero__text">
<!-- wp:paragraph {"className":"zp-eyebrow"} -->
<p class="zp-eyebrow"><?php echo esc_html( zaseki_panel_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"zp-hero__h1"} -->
<h1 class="wp-block-heading zp-hero__h1"><?php echo esc_html( zaseki_panel_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-hero__lede"} -->
<p class="zp-hero__lede"><?php echo esc_html( zaseki_panel_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-hero__row","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group zp-hero__row">
<!-- wp:buttons {"className":"zp-cta"} -->
<div class="wp-block-buttons zp-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/pre-order/"><?php echo esc_html( zaseki_panel_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"zp-arrow"} -->
<p class="zp-arrow"><a href="#hold"><?php echo esc_html( zaseki_panel_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-hero__photo zp-hero__photo--b sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group zp-hero__photo zp-hero__photo--b sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"zp-hero__img"} -->
<figure class="wp-block-image size-full zp-hero__img"><img src="<?php echo zaseki_panel_img( 'hero-visitor-bench.webp' ); ?>" alt="<?php echo zaseki_panel_a( 'alt_h2' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"zp-info","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull zp-info">
<!-- wp:group {"align":"wide","className":"zp-info__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide zp-info__in">
<!-- wp:group {"className":"zp-info__cell zp-info__cell--on","layout":{"type":"default"}} -->
<div class="wp-block-group zp-info__cell zp-info__cell--on">
<!-- wp:paragraph {"className":"zp-info__l"} -->
<p class="zp-info__l"><?php echo esc_html( zaseki_panel_t( 'info_l1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-info__v"} -->
<p class="zp-info__v"><?php echo esc_html( zaseki_panel_t( 'info_v1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group zp-info__cell">
<!-- wp:paragraph {"className":"zp-info__l"} -->
<p class="zp-info__l"><?php echo esc_html( zaseki_panel_t( 'info_l2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-info__v"} -->
<p class="zp-info__v"><?php echo esc_html( zaseki_panel_t( 'info_v2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group zp-info__cell">
<!-- wp:paragraph {"className":"zp-info__l"} -->
<p class="zp-info__l"><?php echo esc_html( zaseki_panel_t( 'info_l3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-info__v"} -->
<p class="zp-info__v"><?php echo esc_html( zaseki_panel_t( 'info_v3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-info__cell zp-info__cell--n","layout":{"type":"default"}} -->
<div class="wp-block-group zp-info__cell zp-info__cell--n">
<!-- wp:paragraph {"className":"zp-info__n"} -->
<p class="zp-info__n"><?php echo esc_html( zaseki_panel_t( 'info_n' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
