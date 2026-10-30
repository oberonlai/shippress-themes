<?php
/**
 * Title: 404 content
 * Slug: shirushi-customs/plain-404
 * Categories: shirushi-customs
 * Inserter: no
 * Description: Not-found heading, text and a link home, in the content language.
 */
?>
<!-- wp:heading {"level":1,"className":"sc-plain__title"} -->
<h1 class="wp-block-heading sc-plain__title"><?php echo esc_html( sc_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sc_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sc-pill"} -->
<p class="sc-pill"><a href="/"><?php echo esc_html( sc_t( 'nf_home' ) ); ?></a></p>
<!-- /wp:paragraph -->
