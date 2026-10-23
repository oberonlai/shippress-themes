<?php
/**
 * Title: Template: single
 * Slug: oto-audio/tpl-single
 * Categories: oto-audio
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"oa-main","layout":{"type":"default"}} -->
<main class="wp-block-group oa-main"><!-- wp:group {"tagName":"section","align":"full","className":"oa-ph oa-ph--post","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull oa-ph oa-ph--post"><!-- wp:post-featured-image {"className":"oa-ph__photo sp-parallax"} /-->

<!-- wp:post-terms {"term":"category","className":"oa-label oa-ph__label"} /-->

<!-- wp:post-title {"level":1,"className":"oa-ph__h","fontSize":"xx-large"} /-->

<!-- wp:group {"className":"oa-ph__side","layout":{"type":"default"}} -->
<div class="wp-block-group oa-ph__side"><!-- wp:post-date {"className":"oa-ph__sentence"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"oa-ph__vcap"} -->
<p class="oa-ph__vcap"><?php echo wp_kses_post( oto_audio_t( 'k69d41a82' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"oa-sec oa-article","layout":{"type":"constrained","contentSize":"680px"}} -->
<section class="wp-block-group alignfull oa-sec oa-article"><!-- wp:post-content {"layout":{"type":"constrained","contentSize":"680px"}} /--></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"oto-audio/close-journal"} /--></main>
<!-- /wp:group -->