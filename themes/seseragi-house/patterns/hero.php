<?php
/**
 * Title: Hero: framed window
 * Slug: seseragi-house/hero
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: The first screen: a 24 px framed window holding the breakfast photograph, a vertical headline with a two-column vertical lede, an on-page link stack and a centred sheet on the window edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"sese-hero","layout":{"type":"default"}} -->
<section class="wp-block-group sese-hero">
<!-- wp:group {"className":"sese-win sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win sp-parallax">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sese-win__img"} -->
<figure class="wp-block-image size-full sese-win__img"><img src="<?php echo esc_url( seseragi_house_img( 'kv-breakfast-above-water.webp' ) ); ?>" alt="<?php echo esc_attr( seseragi_house_t( 'hero_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sese-win__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-win__fg","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__fg">
<!-- wp:group {"className":"sese-hero__words","layout":{"type":"default"}} -->
<div class="wp-block-group sese-hero__words">
<!-- wp:heading {"level":1,"className":"sese-h1"} -->
<h1 class="wp-block-heading sese-h1"><?php echo seseragi_house_lines( 'hero_h1' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sese-lede-v"} -->
<p class="sese-lede-v"><?php echo seseragi_house_lines( 'hero_lede' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<nav class="sese-anchors" aria-label="<?php echo esc_attr( seseragi_house_t( 'anchors_label' ) ); ?>"><a href="#rooms"><?php echo esc_html( seseragi_house_t( 'anc_rooms' ) ); ?></a><a href="#breakfast"><?php echo esc_html( seseragi_house_t( 'anc_breakfast' ) ); ?></a><a href="#river"><?php echo esc_html( seseragi_house_t( 'anc_river' ) ); ?></a><a href="#ask"><?php echo esc_html( seseragi_house_t( 'anc_ask' ) ); ?></a></nav>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group sese-sheet">
<!-- wp:paragraph {"className":"sese-eyebrow"} -->
<p class="sese-eyebrow"><?php echo esc_html( seseragi_house_t( 'sheet_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-sheet__text"} -->
<p class="sese-sheet__text"><?php echo esc_html( seseragi_house_t( 'sheet_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sese-link sese-sheet__link"} -->
<p class="sese-link sese-sheet__link"><a href="/ask/"><?php echo esc_html( seseragi_house_t( 'sheet_link' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
