<?php
/**
 * Title: Home: prototype photograph with a deep band
 * Slug: hatsumei-patent/front-cover
 * Categories: hatsumei-patent
 * Keywords: hero, first screen, prototype, band
 * Viewport Width: 1440
 * Description: First screen: the headline and lead on the left, a wide photograph of an attorney and an engineer over a prototype cut to an irregular chamfered polygon on the right with a small numbered caption, and a deep blue band along the bottom with a chapter counter and a scroll cue.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-cover","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-cover"><!-- wp:group {"className":"hp-cover__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hp-cover__grid"><!-- wp:group {"className":"hp-cover__text","layout":{"type":"default"}} -->
<div class="wp-block-group hp-cover__text"><!-- wp:paragraph {"className":"hp-cover__kicker"} -->
<p class="hp-cover__kicker"><?php echo wp_kses_post( hatsumei_patent_t( 'front_cover_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hp-cover__title"} -->
<h1 class="wp-block-heading hp-cover__title"><?php echo wp_kses_post( hatsumei_patent_t( 'front_cover_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hp-cover__lead"} -->
<p class="hp-cover__lead"><?php echo wp_kses_post( hatsumei_patent_t( 'front_cover_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hp-cover__btns"} -->
<div class="wp-block-buttons hp-cover__btns"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="/first-meeting/"><?php echo wp_kses_post( hatsumei_patent_t( 'front_cover_btn1' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo wp_kses_post( hatsumei_patent_t( 'front_cover_btn2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-cover__media","layout":{"type":"default"}} -->
<div class="wp-block-group hp-cover__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-cover__photo hp-cut hp-cut--a"} -->
<figure class="wp-block-image size-full hp-cover__photo hp-cut hp-cut--a"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-prototype.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_cover_img' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-num-cap"} -->
<p class="hp-num-cap"><?php echo wp_kses_post( hatsumei_patent_t( 'front_cover_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-band-bar","layout":{"type":"default"}} -->
<div class="wp-block-group hp-band-bar"><!-- wp:paragraph {"className":"hp-band-bar__count"} -->
<p class="hp-band-bar__count"><?php echo wp_kses_post( hatsumei_patent_t( 'front_cover_count' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-band-bar__text"} -->
<p class="hp-band-bar__text"><?php echo wp_kses_post( hatsumei_patent_t( 'front_cover_bar' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hp-band-bar__scroll"} -->
<p class="hp-band-bar__scroll"><?php echo wp_kses_post( hatsumei_patent_t( 'front_cover_scroll' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
