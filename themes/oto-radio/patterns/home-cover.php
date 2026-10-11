<?php
/**
 * Title: Home: programme cover with the tuning dial
 * Slug: oto-radio/home-cover
 * Categories: oto-radio
 * Keywords: home, hero, cover, intro, dial, radio
 * Viewport Width: 1280
 * Description: The cover of the programme guide: what the show is, two buttons and a studio photograph, then a tuning dial with the needle on the station.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-cover","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull oto-cover"><!-- wp:group {"align":"wide","className":"oto-cover__inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide oto-cover__inner"><!-- wp:group {"className":"oto-cover__text","layout":{"type":"default"}} -->
<div class="wp-block-group oto-cover__text"><!-- wp:paragraph {"className":"oto-cover__kicker"} -->
<p class="oto-cover__kicker">Tonight’s programme</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"oto-cover__title"} -->
<h1 class="wp-block-heading oto-cover__title">Sounds of ordinary places, after dark.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Every Friday, Nao and Emi take a microphone somewhere nobody records: a tram depot at closing time, a laundromat at midnight, a record shop that only opens when it rains. One place, one hour, no music bed.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#broadcast-log">Hear the latest episode</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/episodes/">Every episode</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"oto-cover__photo"} -->
<figure class="wp-block-image size-large oto-cover__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.jpg' ) ); ?>" alt="A mixing desk with rows of black knobs beside a reel-to-reel tape machine, in violet light"/><figcaption class="wp-element-caption">Studio B, two minutes before the light comes on.</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"oto-dial","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide oto-dial"><!-- wp:paragraph {"className":"oto-dial__scale"} -->
<p class="oto-dial__scale">76 78 80 82 84 86 88 90 MHz</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"oto-dial__station"} -->
<p class="oto-dial__station">You are tuned to Oto Radio</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
