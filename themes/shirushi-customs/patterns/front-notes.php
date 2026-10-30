<?php
/**
 * Title: Home: notes
 * Slug: shirushi-customs/front-notes
 * Categories: shirushi-customs
 * Keywords: customs, broker, home
 * Viewport Width: 1440
 * Description: Three latest notes as hairline rows: date, bracketed category and title.
 */
$img = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sc-sec sc-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-sec sc-notes"><!-- wp:group {"className":"sc-in sc-notes__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sc-in sc-notes__grid"><!-- wp:heading {"className":"sc-h2"} -->
<h2 class="wp-block-heading sc-h2"><?php echo esc_html( sc_t( 'notes_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sc-notes__main","layout":{"type":"default"}} -->
<div class="wp-block-group sc-notes__main"><!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"sc-notes__list","layout":{"type":"default"}} -->
<div class="wp-block-query sc-notes__list"><!-- wp:post-template -->
<!-- wp:group {"className":"sc-note","layout":{"type":"default"}} -->
<div class="wp-block-group sc-note"><!-- wp:post-date {"format":"Y.m.d","className":"sc-note__date"} /-->

<!-- wp:post-terms {"term":"category","className":"sc-note__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sc-note__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"sc-pill"} -->
<p class="sc-pill"><a href="/notes/"><?php echo esc_html( sc_t( 'notes_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
