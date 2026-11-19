<?php
/**
 * Title: Story: morning cut with offset portrait
 * Slug: sumibi-yakiniku/story
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: A white strip with a portrait straddling it, the heading and three paragraphs about the morning cut, signed by the head butcher.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-story","layout":{"type":"default"}} -->
<section class="wp-block-group sy-story" id="story"><!-- wp:html -->
<div class="sy-strip" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sy-label sy-label--l sp-reveal sp-reveal--up"} -->
<p class="sy-label sy-label--l sp-reveal sp-reveal--up"><?php echo esc_html( sumibi_yakiniku_t( 'story_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-story__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sy-story__grid"><!-- wp:group {"className":"sy-story__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sy-story__text sp-reveal sp-reveal--up"><!-- wp:heading {"className":"sy-h2"} -->
<h2 class="wp-block-heading sy-h2"><?php echo esc_html( sumibi_yakiniku_t( 'story_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'story_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'story_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-story__more","layout":{"type":"default"}} -->
<div class="wp-block-group sy-story__more"><!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'story_p3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-sig"} -->
<p class="sy-sig"><?php echo esc_html( sumibi_yakiniku_t( 'story_sig' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-story__side","layout":{"type":"default"}} -->
<div class="wp-block-group sy-story__side"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-portrait sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full sy-portrait sp-reveal sp-reveal--wipe"><img src="<?php echo sumibi_yakiniku_img( 'p06-butcher-hands.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
