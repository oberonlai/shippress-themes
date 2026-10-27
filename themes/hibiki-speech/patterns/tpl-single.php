<?php
/**
 * Title: Template: single
 * Slug: hibiki-speech/tpl-single
 * Categories: hibiki-speech
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hs-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group hs-main"><!-- wp:group {"tagName":"section","align":"full","className":"hs-head hs-head--simple","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hs-head hs-head--simple"><!-- wp:post-title {"level":1,"align":"wide","className":"hs-head__title"} /--></section>
<!-- /wp:group -->

<!-- wp:post-featured-image {"align":"wide","className":"hs-torn hs-torn--b hs-single__img"} /-->

<!-- wp:group {"className":"hs-meta","layout":{"type":"constrained"}} -->
<div class="wp-block-group hs-meta"><!-- wp:post-date {"format":"<?php echo esc_attr( hibiki_speech_t( 'date_fmt' ) ); ?>"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"className":"hs-prose","layout":{"type":"constrained"}} /--></main>
<!-- /wp:group -->