<?php
/**
 * Title: Search: page head
 * Slug: shisei-clinic/search-head
 * Categories: shisei-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Arch page head for search results.
 */
?>
<!-- wp:group {"className":"ss-ph","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-ph"><!-- wp:group {"className":"ss-ph__photo","layout":{"type":"default"}} -->
<div class="wp-block-group ss-ph__photo"><!-- wp:group {"className":"ss-ph__arch sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ss-ph__arch sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04.webp' ) ); ?>" alt="Office worker in a navy shirt rolling one shoulder beside a bright window."/></figure>
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
<div class="wp-block-group ss-ph__copy"><!-- wp:query-title {"type":"search","level":1,"className":"ss-ph__h1"} /-->

<!-- wp:paragraph {"className":"ss-ph__lead"} -->
<p class="ss-ph__lead">Notes and pages that match your search.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="ss-ph__mark" aria-hidden="true">SEARCH</p>
<!-- /wp:html --></section>
<!-- /wp:group -->
