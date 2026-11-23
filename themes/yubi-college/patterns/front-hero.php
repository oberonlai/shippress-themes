<?php
/**
 * Title: Home: split hero
 * Slug: yubi-college/front-hero
 * Categories: yubi-college
 * Viewport Width: 1440
 * Description: Split hero: one documentary photograph at the left with a grain-stippled diagonal ribbon over its corner, the statement beside it at the right, and a bordered eight-route link grid as the hero foot on a pale aqua floor.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"yb-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull yb-hero"><!-- wp:group {"className":"yb-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group yb-hero__photo sp-parallax"><!-- wp:group {"className":"sp-parallax__layer yb-hero__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer yb-hero__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yb-hero__img"} -->
<figure class="wp-block-image size-full yb-hero__img"><img src="<?php echo yubi_college_img( 'p01-kv-saturday-table.webp' ); ?>" alt="<?php echo yubi_college_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<div class="yb-ribbon yb-ribbon--a" aria-hidden="true"></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"yb-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group yb-hero__text"><!-- wp:paragraph {"className":"yb-kicker"} -->
<p class="yb-kicker"><?php echo esc_html( yubi_college_t( 'hero_kicker' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yb-hero__h"} -->
<h1 class="wp-block-heading yb-hero__h"><?php echo yubi_college_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yb-hero__lead"} -->
<p class="yb-hero__lead"><?php echo esc_html( yubi_college_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"yb-hero__actions","layout":{"type":"default"}} -->
<div class="wp-block-group yb-hero__actions"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"yb-pill"} -->
<div class="wp-block-button yb-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/taster-evenings/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'cta_taster' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"yb-textlink"} -->
<p class="yb-textlink"><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php echo esc_html( yubi_college_t( 'cta_courses' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"yb-hero__note"} -->
<p class="yb-hero__note"><?php echo esc_html( yubi_college_t( 'hero_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="yb-ribbon yb-ribbon--b" aria-hidden="true"></div>
<!-- /wp:html -->
<!-- wp:group {"className":"yb-hero__bar","layout":{"type":"default"}} -->
<div class="wp-block-group yb-hero__bar"><!-- wp:html -->
<nav class="yb-infobar" aria-label="<?php echo yubi_college_a( 'bar_label' ); ?>"><a class="yb-cell" href="<?php echo esc_url( home_url( '/courses/#foundation' ) ); ?>"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'c_foundation' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="<?php echo esc_url( home_url( '/courses/#diploma' ) ); ?>"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'c_diploma' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="<?php echo esc_url( home_url( '/courses/#healthcare' ) ); ?>"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'c_health' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="<?php echo esc_url( home_url( '/courses/#legal' ) ); ?>"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'c_legal' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="<?php echo esc_url( home_url( '/courses/#education' ) ); ?>"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'c_edu' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="<?php echo esc_url( home_url( '/teaching-week/' ) ); ?>"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'c_week' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="<?php echo esc_url( home_url( '/taster-evenings/' ) ); ?>"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'c_taster' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a><a class="yb-cell" href="<?php echo esc_url( home_url( '/fees-and-entry/' ) ); ?>"><span class="yb-cell__l"><?php echo esc_html( yubi_college_t( 'c_fees' ) ); ?></span><svg class="yb-arrow" viewBox="0 0 16 10" width="14" height="9" aria-hidden="true" focusable="false"><path d="M0 5h14M10 1l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.25"/></svg></a></nav>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
