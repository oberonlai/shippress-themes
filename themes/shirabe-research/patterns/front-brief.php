<?php
/**
 * Title: Home: the brief
 * Slug: shirabe-research/front-brief
 * Categories: shirabe-research
 * Keywords: research, brief, about
 * Viewport Width: 1440
 * Description: Ink band with an uppercase section title that rises from a mask, a serif statement, two paragraphs and a portrait photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sr-band sr-band--ink sr-brief","backgroundColor":"ink","textColor":"base","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sr-band sr-band--ink sr-brief has-base-color has-ink-background-color has-text-color has-background" id="brief"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"sr-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group sr-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"sr-title__h"} -->
<h2 class="wp-block-heading sr-title__h"><?php echo wp_kses_post( shirabe_research_t( 'k9eaa3c08' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sr-eyebrow"} -->
<p class="sr-eyebrow"><?php echo wp_kses_post( shirabe_research_t( 'k222eea2d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sr-brief__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sr-brief__grid"><!-- wp:group {"className":"sr-brief__text","layout":{"type":"default"}} -->
<div class="wp-block-group sr-brief__text"><!-- wp:heading {"level":3,"className":"sr-statement"} -->
<h3 class="wp-block-heading sr-statement"><?php echo wp_kses_post( shirabe_research_t( 'kc12a0811' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shirabe_research_t( 'k42f0ba36' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shirabe_research_t( 'k62226642' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sr-brief__photo sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-large sr-brief__photo sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02.webp' ) ); ?>" alt="<?php echo esc_attr( shirabe_research_t( 'a2f8418c9' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
