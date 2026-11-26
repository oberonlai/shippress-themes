<?php
/**
 * Title: Home: diagonal-split hero with info-bar
 * Slug: fuchi-glazing/front-hero
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Solid slate panel with a slanted edge carrying the headline and the one request, one framed photograph beside it with a drawn frame line, and a three-cell info-bar under it.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","className":"fg-sec fg-herosec","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull fg-sec fg-herosec">
<!-- wp:group {"className":"fg-hero","layout":{"type":"default"}} -->
<div class="wp-block-group fg-hero">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"fg-hero__photo sp-parallax"} -->
<figure class="wp-block-image size-full fg-hero__photo sp-parallax"><img src="<?php echo fuchi_glazing_img( 'hero-pane-lift.webp' ); ?>" alt="<?php echo fuchi_glazing_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<div class="fg-hero__frame" aria-hidden="true"><svg class="fg-hero__line" focusable="false"><rect x="1" y="1"/></svg><span class="fg-hero__plate"><?php echo esc_html( fuchi_glazing_t( 'hero_plate' ) ); ?></span></div>
<!-- /wp:html -->
<!-- wp:group {"className":"fg-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group fg-hero__panel">
<!-- wp:group {"className":"fg-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group fg-hero__text">
<!-- wp:paragraph {"className":"fg-eyebrow"} -->
<p class="fg-eyebrow"><?php echo esc_html( fuchi_glazing_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"fg-hero__h1"} -->
<h1 class="wp-block-heading fg-hero__h1"><?php echo esc_html( fuchi_glazing_t( 'hero_h1_a' ) ); ?><br><?php echo esc_html( fuchi_glazing_t( 'hero_h1_b' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-hero__lead"} -->
<p class="fg-hero__lead"><?php echo esc_html( fuchi_glazing_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<a class="fg-cta fg-cta--on-dark" href="/contact/"><span><?php echo esc_html( fuchi_glazing_t( 'cta_book' ) ); ?></span><svg class="fg-cta__arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="7.4"/><path d="M4.8 8h6M8.6 5.6 11 8l-2.4 2.4"/></svg></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<ul class="fg-pager" aria-label="<?php echo fuchi_glazing_a( 'pager_label' ); ?>"><li class="is-on"><?php echo esc_html( fuchi_glazing_t( 'pager_1' ) ); ?></li><li><?php echo esc_html( fuchi_glazing_t( 'pager_2' ) ); ?></li><li><?php echo esc_html( fuchi_glazing_t( 'pager_3' ) ); ?></li></ul>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"fg-hero__cap"} -->
<p class="fg-hero__cap"><?php echo esc_html( fuchi_glazing_t( 'hero_cap' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"fg-infobar","layout":{"type":"default"}} -->
<div class="wp-block-group fg-infobar">
<!-- wp:group {"className":"fg-infobar__in","layout":{"type":"default"}} -->
<div class="wp-block-group fg-infobar__in">
<!-- wp:group {"className":"fg-infobar__cell","layout":{"type":"default"}} -->
<div class="wp-block-group fg-infobar__cell">
<!-- wp:paragraph {"className":"fg-infobar__l"} -->
<p class="fg-infobar__l"><?php echo esc_html( fuchi_glazing_t( 'ib_l1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-infobar__v"} -->
<p class="fg-infobar__v"><?php echo esc_html( fuchi_glazing_t( 'ib_v1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-infobar__cell","layout":{"type":"default"}} -->
<div class="wp-block-group fg-infobar__cell">
<!-- wp:paragraph {"className":"fg-infobar__l"} -->
<p class="fg-infobar__l"><?php echo esc_html( fuchi_glazing_t( 'ib_l2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-infobar__v"} -->
<p class="fg-infobar__v"><?php echo esc_html( fuchi_glazing_t( 'ib_v2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"fg-infobar__cell","layout":{"type":"default"}} -->
<div class="wp-block-group fg-infobar__cell">
<!-- wp:paragraph {"className":"fg-infobar__l"} -->
<p class="fg-infobar__l"><?php echo esc_html( fuchi_glazing_t( 'ib_l3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"fg-infobar__v"} -->
<p class="fg-infobar__v"><?php echo esc_html( fuchi_glazing_t( 'ib_v3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
