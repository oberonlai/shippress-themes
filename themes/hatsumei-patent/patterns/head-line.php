<?php
/**
 * Title: Header: line under the firm name
 * Slug: hatsumei-patent/head-line
 * Categories: hatsumei-patent
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The small line under the firm name in the header.
 */
?>
<!-- wp:paragraph {"className":"hp-brand__line"} -->
<p class="hp-brand__line"><?php echo wp_kses_post( hatsumei_patent_t( 'head_line_01' ) ); ?></p>
<!-- /wp:paragraph -->
