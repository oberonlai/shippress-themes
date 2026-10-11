<?php
/**
 * Title: Home: a word from the head coach
 * Slug: undo-ba/home-coach
 * Categories: undo-ba
 * Keywords: coach, quote, team
 * Description: A portrait of the head coach beside a short quote.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ub-section ub-coach","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ub-section ub-coach"><!-- wp:group {"className":"ub-split ub-split--coach","layout":{"type":"default"}} -->
<div class="wp-block-group ub-split ub-split--coach"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ub-coach__photo"} -->
<figure class="wp-block-image size-large ub-coach__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/coach.jpg' ) ); ?>" alt="A coach in a dark long-sleeved top guiding a client through a squat"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ub-coach__text","layout":{"type":"default"}} -->
<div class="wp-block-group ub-coach__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">From the head coach</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ub-quote"} -->
<p class="ub-quote">“Most people do not need more intensity. They need someone to watch closely, say less, and let the weeks add up.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ub-coach__name"} -->
<p class="ub-coach__name">Ren Takamori, founder and head coach</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ub-buttons"} -->
<div class="wp-block-buttons ub-buttons"><!-- wp:button {"className":"is-style-quiet"} -->
<div class="wp-block-button is-style-quiet"><a class="wp-block-button__link wp-element-button" href="/coaches/">Meet the coaches</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
