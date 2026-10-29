<?php
/**
 * Title: Archive: page head
 * Slug: shisei-clinic/archive-head
 * Categories: shisei-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Arch page head for category, tag and date archives.
 */
?>
<!-- wp:group {"className":"ss-ph","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-ph"><!-- wp:group {"className":"ss-ph__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ss-ph__photo"><!-- wp:group {"className":"ss-ph__arch sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ss-ph__arch sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p17.webp' ) ); ?>" alt="The clinic team talking with two visitors in a bright treatment area."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ss-ph__oval","layout":{"type":"default"}} -->
<div class="wp-block-group ss-ph__oval"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05.webp' ) ); ?>" alt="Empty pale desk with a closed laptop, open notebook and ceramic mug."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ss-ghost ss-ghost--a" aria-hidden="true"></div><div class="ss-ghost ss-ghost--b" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ss-ph__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ss-ph__copy"><!-- wp:query-title {"type":"archive","level":1,"className":"ss-ph__h1"} /-->

<!-- wp:paragraph {"className":"ss-ph__lead"} -->
<p class="ss-ph__lead">Practical notes from our Vancouver treatment rooms for people who sit all week.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="ss-ph__mark" aria-hidden="true">NOTES</p>
<!-- /wp:html --></section>
<!-- /wp:group -->
