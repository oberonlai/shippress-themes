<?php
/**
 * Title: Home: heavy headline over three crossfading photographs with a hairline ticket card
 * Slug: hobi-journeys/front-hero
 * Categories: hobi-journeys
 * Viewport Width: 1440
 * Description: First screen: full-bleed documentary photographs (parallax layer) under a navy scrim, a heavy white two-line headline, lede and red button bottom-left, a transparent hairline ticket card right, hairline columns, three slide bars and a three-column wipe at load.
 */
?>
<!-- wp:group {"className":"hj-hero-wrap","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hj-hero-wrap"><!-- wp:group {"className":"hj-hero sp-parallax","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hj-hero sp-parallax"><!-- wp:html -->
<div class="hj-hero__slides sp-parallax__layer"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-lobby.webp' ) ); ?>" alt="A tour director hands boarding passes to colleagues at a hotel lobby front desk." width="2000" height="1250" fetchpriority="high" decoding="async"/><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-coach.webp' ) ); ?>" alt="Colleagues board a plain white coach at dawn outside a hotel forecourt." width="2000" height="1250" loading="lazy" decoding="async"/><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-gate.webp' ) ); ?>" alt="Tour director counting colleagues gathered beside a large window at an airport departure gate." width="2000" height="1250" loading="lazy" decoding="async"/></div>
<!-- /wp:html -->

<!-- wp:html -->
<span class="hj-hero__scrim" aria-hidden="true"></span><div class="hj-grid hj-grid--photo" aria-hidden="true"></div><div class="hj-bars" aria-hidden="true"><i></i><i></i><i></i></div><div class="hj-wipe" aria-hidden="true"><span></span><span></span><span></span></div>
<!-- /wp:html -->

<!-- wp:group {"className":"hj-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group hj-hero__in"><!-- wp:heading {"level":1,"className":"hj-hero__title"} -->
<h1 class="wp-block-heading hj-hero__title">Reward<br>trips.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hj-hero__lede"} -->
<p class="hj-hero__lede">We turn a demanding sales year into four days your team remembers. Corporate reward trips, retreats and summits for groups of 20 to 120 guests, from brief to debrief.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hj-hero__btn"} -->
<div class="wp-block-buttons hj-hero__btn"><!-- wp:button {"className":"hj-btn"} -->
<div class="wp-block-button hj-btn"><a class="wp-block-button__link wp-element-button" href="/brief/">Brief us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hj-hero__down"} -->
<p class="hj-hero__down"><a href="#delivered">See the trips ↓</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-ticket hj-ticket--hero","layout":{"type":"default"}} -->
<div class="wp-block-group hj-ticket hj-ticket--hero"><!-- wp:group {"className":"hj-ticket__top","layout":{"type":"default"}} -->
<div class="wp-block-group hj-ticket__top"><!-- wp:paragraph -->
<p>Next departure</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>72 guests</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"hj-ticket__title"} -->
<h2 class="wp-block-heading hj-ticket__title">Seville and the Andalusian coast, three nights</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hj-ticket__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hj-ticket__foot"><!-- wp:group {"className":"hj-ticket__l","layout":{"type":"default"}} -->
<div class="wp-block-group hj-ticket__l"><!-- wp:paragraph -->
<p>Departs<br><strong>Thu 13 May 2027</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>From <strong>€1,850</strong> per guest</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="hj-ticket__r"><svg class="hj-glyph" viewBox="0 0 96 96" width="96" height="96" aria-hidden="true" focusable="false"><path d="M14 70 44 38 82 24" fill="none" stroke="currentColor" stroke-width="1.5"/><circle cx="14" cy="70" r="4.5" fill="currentColor"/><circle cx="44" cy="38" r="4.5" fill="currentColor"/><circle class="hj-glyph__end" cx="82" cy="24" r="5.5"/></svg></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
