<?php
/**
 * Title: Home: notes
 * Slug: yanagi-hygiene/front-notes
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: Latest notes as plain text rows.
 */
?>
<!-- wp:group {"align":"full","className":"yh-sec yh-notes","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-sec yh-notes"><!-- wp:group {"className":"yh-in","layout":{"type":"default"}} -->
<div class="wp-block-group yh-in"><!-- wp:heading {"level":2,"className":"yh-notes__h"} -->
<h2 class="wp-block-heading yh-notes__h"><?php echo esc_html( yh_t( 'notes_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"yh-nlist"} -->
<div class="wp-block-query yh-nlist"><!-- wp:post-template -->
<!-- wp:group {"className":"yh-nrow","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group yh-nrow"><!-- wp:post-date {"format":"M j, Y","className":"yh-nrow__date"} /--><!-- wp:post-title {"level":0,"isLink":true,"className":"yh-nrow__title"} /--><!-- wp:post-terms {"term":"category","className":"yh-nrow__cat"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
