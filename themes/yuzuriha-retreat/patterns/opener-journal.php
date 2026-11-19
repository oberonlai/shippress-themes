<?php
/**
 * Title: Opener: journal page, photograph under the frosted strip
 * Slug: yuzuriha-retreat/opener-journal
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Full-width 560px photograph with a dark glow, a parenthesised kicker and the page title lower left.
 */
?>
<!-- wp:group {"tagName":"section","className":"yr-opener sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group yr-opener sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-opener__img"} -->
<figure class="wp-block-image size-full yr-opener__img"><img src="<?php echo yuzuriha_retreat_img( 'p03-practice-hall.webp' ); ?>" alt="<?php echo yuzuriha_retreat_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yr-opener__text","layout":{"type":"default"}} -->
<div class="wp-block-group yr-opener__text"><!-- wp:html -->
<div class="yr-glow" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yr-kicker"} -->
<p class="yr-kicker"><?php echo esc_html( yuzuriha_retreat_t( 'jr_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yr-opener__h"} -->
<h1 class="wp-block-heading yr-opener__h"><?php echo esc_html( yuzuriha_retreat_t( 'jr_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
