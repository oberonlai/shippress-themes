<?php
/**
 * Title: Home: photograph stage
 * Slug: megumi-pharmacy/front-stage
 * Categories: megumi-pharmacy
 * Keywords: pharmacy, hero, counter
 * Viewport Width: 1440
 * Description: One full-bleed photograph of the counter: three white lines, an info bar, then the introduction on the same photograph.
 */
$img = get_theme_file_uri( 'assets/images/p01-counter.webp' );
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":0,"isDark":false,"align":"full","className":"mp-stage sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light mp-stage sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Pharmacist in a stone coat speaks with a customer across a pale oak counter." src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"mp-stage__first","layout":{"type":"default"}} -->
<div class="wp-block-group mp-stage__first"><!-- wp:heading {"level":1,"className":"mp-hero"} -->
<h1 class="wp-block-heading mp-hero">Your medicines,<br>talked through,<br>by name.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-sub"} -->
<p class="mp-sub">Community pharmacy on Queen Street East since 2006.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"mp-cue","layout":{"type":"default"}} -->
<div class="wp-block-group mp-cue"><!-- wp:paragraph {"className":"mp-cue__word"} -->
<p class="mp-cue__word">Scroll</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="mp-cue__line" aria-hidden="true"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-info","layout":{"type":"default"}} -->
<div class="wp-block-group mp-info"><!-- wp:paragraph -->
<p>Mon–Fri 8:30–19:00 · Sat 9:00–17:00 · Sun 10:00–14:00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>1184 Queen Street East, Toronto</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Repeat prescriptions ready within 24 hours</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-info__link"} -->
<p class="mp-info__link"><a href="/visit/">Plan your visit →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-stage__intro sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-stage__intro sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker">Our pharmacy</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-intro"} -->
<p class="mp-intro">Megumi Pharmacy is the independent community pharmacy at 1184 Queen Street East, Toronto. Megumi Ward opened the counter in 2006, and the shop is still small enough that we know people by name.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-intro"} -->
<p class="mp-intro">Every new medicine is explained at the counter before it is bagged. We go through what it is for and how to take it, and we stop when there is a question.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-intro"} -->
<p class="mp-intro">The same six people are here every week. You should not have to retell your medicines from the beginning to someone who was not here last time.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mp-btn mp-btn--light"} -->
<div class="wp-block-button mp-btn mp-btn--light"><a class="wp-block-button__link wp-element-button" href="/about/">Our story →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
