<?php
/**
 * Title: Article: page head
 * Slug: shisei-clinic/single-head
 * Categories: shisei-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Arch page head for a single note, with the date above the title.
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
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p13.webp' ) ); ?>" alt="Quiet clinic reception with a wooden bench, plants and a bright window."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ss-ghost ss-ghost--a" aria-hidden="true"></div><div class="ss-ghost ss-ghost--b" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ss-ph__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ss-ph__copy"><!-- wp:post-date {"className":"ss-ph__date"} /-->

<!-- wp:post-title {"level":1,"className":"ss-ph__h1"} /--></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="ss-ph__mark" aria-hidden="true">NOTES</p>
<!-- /wp:html --></section>
<!-- /wp:group -->
