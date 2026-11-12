<?php
/**
 * Title: Home: waitlist
 * Slug: homura-safety/front-news
 * Categories: homura-safety
 * Keywords: newsletter, waitlist
 * Viewport Width: 1440
 * Description: A pale band with two lines on the monthly code-change brief and the newsletter form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec hs-sec--pale hs-news","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec hs-sec--pale hs-news"><!-- wp:group {"align":"wide","className":"hs-news__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-news__grid"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'nl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'nl_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'nl_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-news__form","layout":{"type":"default"}} -->
<div class="wp-block-group hs-news__form"><!-- wp:pattern {"slug":"homura-safety/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
