<?php
/**
 * Title: Home: three things we do
 * Slug: megumi-pharmacy/front-ways
 * Categories: megumi-pharmacy
 * Keywords: services, cards
 * Viewport Width: 1440
 * Description: Three portrait link cards (0.77) with the label inside the photograph at the bottom left.
 */
$u = function ( $f ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $f ) );
};
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mp-sec mp-ways","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mp-sec mp-ways"><!-- wp:group {"className":"mp-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mp-wrap"><!-- wp:group {"className":"mp-head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-head sp-reveal sp-reveal--up"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"mp-kicker"} -->
<p class="mp-kicker">What we do</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mp-h2"} -->
<h2 class="wp-block-heading mp-h2">Three things we do every day, slowly enough for questions.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-more"} -->
<p class="mp-more"><a href="/services/">Services &amp; fees</a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-cards sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group mp-cards sp-stagger"><!-- wp:group {"className":"mp-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"mp-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo $u( 'p02-bag.webp' ); ?>" alt="Young pharmacy assistant hands a plain white paper bag to an older man."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-card__label"} -->
<p class="mp-card__label"><a href="/prescriptions/">Prescriptions</a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-card__text"} -->
<p class="mp-card__text">Bring a paper prescription, an e-prescription, or a repeat request. We check it, then talk it through at the counter.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"mp-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo $u( 'p03-review.webp' ); ?>" alt="Pharmacist sits with a woman in her seventies beside a pill organiser and list."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-card__label"} -->
<p class="mp-card__label"><a href="/medicine-reviews/">Medicine reviews</a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-card__text"} -->
<p class="mp-card__text">Bring every medicine you take. In 30 minutes we make one list and talk through what, if anything, should change.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card sp-reveal sp-reveal--up"><!-- wp:group {"className":"mp-card__media","layout":{"type":"default"}} -->
<div class="wp-block-group mp-card__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo $u( 'p04-flu.webp' ); ?>" alt="Pharmacist gives a flu shot into a young man's upper arm in a bright room."/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mp-card__label"} -->
<p class="mp-card__label"><a href="/vaccinations/">Vaccinations &amp; travel</a><span class="mp-pill" aria-hidden="true"></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mp-card__text"} -->
<p class="mp-card__text">Flu shots are given in the consultation room. A travel consultation covers vaccines, your records, and aftercare.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
