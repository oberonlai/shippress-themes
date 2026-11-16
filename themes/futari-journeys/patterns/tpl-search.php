<?php
/**
 * Title: Template: search
 * Slug: futari-journeys/tpl-search
 * Categories: futari-journeys
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"fj-main fj-main--index","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull fj-main fj-main--index"><!-- wp:group {"className":"fj-section fj-section--in fj-listhead","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull fj-section fj-section--in fj-listhead"><!-- wp:group {"className":"fj-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group fj-narrow"><!-- wp:group {"className":"fj-eyebrow-row","layout":{"type":"default"}} -->
<div class="wp-block-group fj-eyebrow-row"><!-- wp:paragraph {"className":"fj-eyebrow"} -->
<p class="fj-eyebrow"><?php echo wp_kses_post( futari_journeys_t( 'k13348442' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"fj-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity fj-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:query-title {"type":"search","level":1,"className":"fj-h1 fj-h1--in"} /-->

<!-- wp:search {"label":"<?php echo esc_attr( futari_journeys_t( 'a13348442' ) ); ?>","showLabel":false,"placeholder":"Search the journal","buttonText":"<?php echo esc_attr( futari_journeys_t( 'a13348442' ) ); ?>","className":"fj-search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"futari-journeys/page-journal-list"} /--></main>
<!-- /wp:group -->