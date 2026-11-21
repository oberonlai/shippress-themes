<?php
/**
 * Title: Home: our story
 * Slug: enogu-supply/front-story
 * Categories: enogu-supply
 * Viewport Width: 1440
 * Description: Vertical tagline between two short accent rules, a wide shop-front photograph, a centred title and three narrative paragraphs.
 */
?>
<!-- wp:group {"className":"en-sec en-story","tagName":"section","anchor":"story","layout":{"type":"default"}} -->
<section id="story" class="wp-block-group en-sec en-story">
<!-- wp:group {"className":"en-col","layout":{"type":"default"}} -->
<div class="wp-block-group en-col">
<!-- wp:group {"className":"en-tagline","layout":{"type":"default"}} -->
<div class="wp-block-group en-tagline">
<!-- wp:paragraph {"className":"en-tagline__t"} -->
<p class="en-tagline__t"><?php echo enogu_supply_lines( 'tagline' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"en-story__img sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full en-story__img sp-reveal sp-reveal--zoom"><img src="<?php echo enogu_supply_img( 'story-shopfront.webp' ); ?>" alt="<?php echo enogu_supply_a( 'alt_s1' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"en-title-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group en-title-wrap sp-reveal sp-reveal--up">
<!-- wp:heading {"level":2,"className":"en-title"} -->
<h2 class="wp-block-heading en-title"><?php echo esc_html( enogu_supply_t( 'story_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"en-story__p"} -->
<p class="en-story__p"><?php echo esc_html( enogu_supply_t( 'story_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-story__p"} -->
<p class="en-story__p"><?php echo esc_html( enogu_supply_t( 'story_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"en-story__p"} -->
<p class="en-story__p"><?php echo esc_html( enogu_supply_t( 'story_p3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
