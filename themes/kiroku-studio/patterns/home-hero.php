<?php
/**
 * Title: Home: kinetic hero (headline over the studio photograph)
 * Slug: kiroku-studio/home-hero
 * Categories: kiroku-studio
 * Keywords: hero, headline, showreel, intro
 * Viewport Width: 1440
 * Description: The opening screen: a recording label, a giant headline whose last word stretches, a lead and two buttons over a darkened studio photograph. The header's numbered index sits in its top-right corner.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-hero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-hero__media"} -->
<figure class="wp-block-image size-full ks-hero__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="A dark studio with a long wooden table of sketches and a green laser beam crossing the room"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"ks-hero__inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-hero__inner"><!-- wp:paragraph {"className":"ks-rec"} -->
<p class="ks-rec">Showreel 2026 · Tokyo</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-hero__title"} -->
<h1 class="wp-block-heading ks-hero__title">We record<br>things that<br><em>move</em>.</h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"ks-hero__foot","layout":{"type":"default"}} -->
<div class="wp-block-group ks-hero__foot"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Kiroku is a motion and brand studio of nine people. We make identities, films and interactive pieces that refuse to sit still.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#reel">Watch the reel</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/">Start a project</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
