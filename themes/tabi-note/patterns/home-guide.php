<?php
/**
 * Title: Home: a word from a guide
 * Slug: tabi-note/home-guide
 * Categories: tabi-note
 * Keywords: guide, quote
 * Description: A photograph of a guide on a hill path with a short quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-section tn-guide","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-guide"><!-- wp:group {"className":"tn-split tn-split--guide","layout":{"type":"default"}} -->
<div class="wp-block-group tn-split tn-split--guide"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"tn-guide__photo"} -->
<figure class="wp-block-image size-large tn-guide__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/guide-walk.jpg' ) ); ?>" alt="A guide in a blue jacket pointing out the valley from a stone hill path"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"tn-guide__text","layout":{"type":"default"}} -->
<div class="wp-block-group tn-guide__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">From the guides</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-quote"} -->
<p class="tn-quote">“I still stop at the same bend above the valley every time. The walkers think it is for the view. Really it is so that everyone arrives at the village together.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tn-guide__name"} -->
<p class="tn-guide__name">Aiko Morinaga · head guide, Iya Valley and Kumano</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"tn-buttons"} -->
<div class="wp-block-buttons tn-buttons"><!-- wp:button {"className":"is-style-quiet"} -->
<div class="wp-block-button is-style-quiet"><a class="wp-block-button__link wp-element-button" href="/about/">Meet the guides</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
