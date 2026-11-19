<?php
/**
 * Title: Opener: archive page, photograph under the frosted strip
 * Slug: yuzuriha-retreat/opener-archive
 * Categories: yuzuriha-retreat
 * Viewport Width: 1440
 * Description: Same opener as the journal page with the archive title.
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

<!-- wp:query-title {"type":"archive","level":1,"className":"yr-opener__h"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
