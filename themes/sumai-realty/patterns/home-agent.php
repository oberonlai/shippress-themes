<?php
/**
 * Title: Home: the managing agent
 * Slug: sumai-realty/home-agent
 * Categories: sumai-realty
 * Keywords: agent, team, quote, person, about
 * Viewport Width: 1440
 * Description: A portrait in a plan frame beside a quote from the managing agent and links to the team and to book a viewing.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sr-section sr-section--mist","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sr-section sr-section--mist"><!-- wp:group {"align":"wide","className":"sr-agent","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sr-agent"><!-- wp:image {"sizeSlug":"large","className":"is-style-plan-frame sr-agent__photo"} -->
<figure class="wp-block-image size-large is-style-plan-frame sr-agent__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/agent.jpg' ) ); ?>" alt="A smiling agent in a grey suit standing in an empty, sunlit flat under a brass pendant lamp"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sr-agent__text","layout":{"type":"default"}} -->
<div class="wp-block-group sr-agent__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Your agent</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sr-agent__quote"} -->
<p class="sr-agent__quote">“I would rather lose a sale than have you find a fee after you sign.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sr-agent__name"} -->
<p class="sr-agent__name"><strong>Emi Takase</strong><br>Managing agent, licensed since 2009</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Emi opened the office in 2011 with one rule: every number on the sheet, before the viewing. Four of us now cover the three neighbourhoods on foot.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/about/">Meet the team</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/contact/">Book a viewing</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
