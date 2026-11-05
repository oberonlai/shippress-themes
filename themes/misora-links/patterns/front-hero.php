<?php
/**
 * Title: Home: first tee hero
 * Slug: misora-links/front-hero
 * Categories: misora-links
 * Viewport Width: 1440
 * Description: First screen: ticket-notch photo, cropped display word, vertical column, lead and H1.
 */
?>
<!-- wp:group {"className":"ml-hero","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-hero"><!-- wp:group {"className":"ml-hero__frame","layout":{"type":"default"}} -->
<div class="wp-block-group ml-hero__frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-ticket ml-ticket--lg sp-parallax"} -->
<figure class="wp-block-image size-full ml-ticket ml-ticket--lg sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-first-tee.webp' ) ); ?>" alt="<?php echo esc_attr( misora_links_t( 'alt_p01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"ml-word ml-hero__word"} -->
<p class="ml-word ml-hero__word"><?php echo esc_html( misora_links_t( 'hero_word' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-vert ml-hero__vert"} -->
<p class="ml-vert ml-hero__vert"><?php echo wp_kses_post( misora_links_t( 'hero_vert' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<div class="ml-crest"><svg class="ml-crest__svg" viewBox="0 0 120 120" role="img" aria-label="<?php echo esc_attr( misora_links_t( 'crest_alt' ) ); ?>"><defs><path id="ml-ring-hero" d="M60 60m-47 0a47 47 0 1 1 94 0a47 47 0 1 1-94 0"/></defs><g class="ml-crest__ring"><text><textPath href="#ml-ring-hero" startOffset="0" textLength="288" lengthAdjust="spacing"><?php echo esc_html( misora_links_t( 'crest_ring' ) ); ?></textPath></text></g><ellipse cx="60" cy="60" rx="24" ry="30" fill="none" stroke="currentColor" stroke-width="1"/><path d="M60 38v34" stroke="currentColor" stroke-width="1"/><path d="M60 38l13 5-13 5z" fill="#B8956A"/><path d="M44 76c6-6 10-4 16 0M76 76c-6-6-10-4-16 0" fill="none" stroke="currentColor" stroke-width="1"/></svg></div>
<!-- /wp:html --><!-- wp:group {"className":"ml-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group ml-hero__text"><!-- wp:paragraph {"className":"ml-lead"} -->
<p class="ml-lead"><?php echo esc_html( misora_links_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"ml-hero__h1"} -->
<h1 class="wp-block-heading ml-hero__h1"><?php echo esc_html( misora_links_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:group {"className":"ml-hero__actions","layout":{"type":"default"}} -->
<div class="wp-block-group ml-hero__actions"><!-- wp:buttons {"className":"ml-buttons"} -->
<div class="wp-block-buttons ml-buttons"><!-- wp:button {"className":"ml-btn"} -->
<div class="wp-block-button ml-btn"><a class="wp-block-button__link wp-element-button" href="/morning-sheet/"><?php echo esc_html( misora_links_t( 'hero_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --><!-- wp:paragraph {"className":"ml-textlink"} -->
<p class="ml-textlink"><a href="/morning-sheet/"><?php echo esc_html( misora_links_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
