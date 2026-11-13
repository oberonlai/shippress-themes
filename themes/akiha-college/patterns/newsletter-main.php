<?php
/**
 * Title: Newsletter page
 * Slug: akiha-college/newsletter-main
 * Categories: akiha-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Description: A standalone subscribe page: what we send and the newsletter form slot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-sec ak-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ak-sec ak-pagehead"><!-- wp:heading {"level":1,"className":"ak-h1 ak-h1--page"} -->
<h1 class="wp-block-heading ak-h1 ak-h1--page"><?php echo esc_html( akiha_college_t( 'news_t' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-body"} -->
<p class="ak-body"><?php echo esc_html( akiha_college_t( 'news_intro' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ak-form-col","layout":{"type":"default"}} -->
<div class="wp-block-group ak-form-col"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ak-small"} -->
<p class="ak-small"><?php echo esc_html( akiha_college_t( 'news_privacy' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
