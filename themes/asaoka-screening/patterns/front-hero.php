<?php
/**
 * Title: Home: split hero with wave and notice card
 * Slug: asaoka-screening/front-hero
 * Categories: asaoka-screening
 * Keywords: health screening, medical, company
 * Viewport Width: 1440
 * Description: Text left, two rounded photographs right (the large one with slow parallax), a mist wave and a tabbed notice card with the next open dates.
 */
?>
<!-- wp:group {"className":"as-hero","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull as-hero">

<!-- wp:group {"className":"as-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group as-hero__top">
<!-- wp:group {"className":"as-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group as-hero__text">
<!-- wp:paragraph {"className":"as-dot-label"} -->
<p class="as-dot-label"><?php echo esc_html( asaoka_screening_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"as-hero__h1"} -->
<h1 class="wp-block-heading as-hero__h1"><?php echo esc_html( asaoka_screening_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"as-hero__lead"} -->
<p class="as-hero__lead"><?php echo esc_html( asaoka_screening_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"as-hero__btns"} -->
<div class="wp-block-buttons as-hero__btns"><!-- wp:button {"className":"as-btn-coral"} -->
<div class="wp-block-button as-btn-coral"><a class="wp-block-button__link wp-element-button" href="/#dates"><?php echo esc_html( asaoka_screening_t( 'hero_btn' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link as-textlink"} -->
<div class="wp-block-button is-style-text-link as-textlink"><a class="wp-block-button__link wp-element-button" href="/the-morning/"><?php echo esc_html( asaoka_screening_t( 'hero_link' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"as-hero__photos","layout":{"type":"default"}} -->
<div class="wp-block-group as-hero__photos">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"as-hero__main sp-parallax"} -->
<figure class="wp-block-image size-full as-hero__main sp-parallax"><img src="<?php echo asaoka_screening_img( 'p01-hero-booklet.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"as-hero__side"} -->
<figure class="wp-block-image size-full as-hero__side"><img src="<?php echo asaoka_screening_img( 'p02-morning-walk.webp' ); ?>" alt="<?php echo esc_attr( asaoka_screening_t( 'alt_P02' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="as-hero__foot"><svg class="as-wave" viewBox="0 0 1440 150" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0 128C300 150 640 118 960 70S1320 14 1440 8V150H0Z" fill="#EAF0EE"/></svg><div class="as-hero__band"><div class="as-notice"><p class="as-notice__tab"><svg viewBox="0 0 18 18" width="18" height="18" aria-hidden="true" focusable="false"><circle cx="9" cy="9" r="9" fill="#E9795C"/><path d="M9 4.6v5.2M9 12.2v1.2" stroke="#fff" stroke-width="1.8" stroke-linecap="round"/></svg><?php echo esc_html( asaoka_screening_t( 'notice_tab' ) ); ?></p><p class="as-notice__date"><?php echo esc_html( asaoka_screening_t( 'notice_date' ) ); ?></p><span class="as-chip"><?php echo esc_html( asaoka_screening_t( 'notice_chip' ) ); ?></span><p class="as-notice__text"><?php echo esc_html( asaoka_screening_t( 'notice_text' ) ); ?></p><a class="as-go" href="#dates" aria-label="<?php echo esc_attr( asaoka_screening_t( 'notice_go' ) ); ?>"><?php echo asaoka_screening_arrow(); ?></a></div></div></div>
<!-- /wp:html -->

</div>
<!-- /wp:group -->
