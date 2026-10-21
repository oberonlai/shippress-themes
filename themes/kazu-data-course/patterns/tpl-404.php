<?php
/**
 * Title: Template: 404
 * Slug: kazu-data-course/tpl-404
 * Categories: kazu-data-course
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"main","className":"kz-main","layout":{"type":"default"}} -->
<main class="wp-block-group kz-main"><!-- wp:group {"tagName":"section","className":"kz-sec kz-pagesec","layout":{"type":"default"}} -->
<section class="wp-block-group kz-sec kz-pagesec"><!-- wp:group {"className":"kz-head","layout":{"type":"default"}} -->
<div class="wp-block-group kz-head"><!-- wp:heading {"level":1,"className":"kz-pagehead"} -->
<h1 class="wp-block-heading kz-pagehead"><?php echo esc_html( kazu_t( 'tpl_404_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-prose","layout":{"type":"default"}} -->
<div class="wp-block-group kz-prose"><!-- wp:paragraph -->
<p><?php echo esc_html( kazu_t( 'tpl_404_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/curriculum/"><?php echo esc_html( kazu_t( 'tpl_404_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
