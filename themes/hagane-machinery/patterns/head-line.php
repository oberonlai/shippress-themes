<?php
/**
 * Title: Header: line under the company name
 * Slug: hagane-machinery/head-line
 * Categories: hagane-machinery
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The small line under the company name in the header.
 */
?>
<!-- wp:paragraph {"className":"hm-brand__line"} -->
<p class="hm-brand__line"><?php echo wp_kses_post( hagane_machinery_t( 'head_line_01' ) ); ?></p>
<!-- /wp:paragraph -->
