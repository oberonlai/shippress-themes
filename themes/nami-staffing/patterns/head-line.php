<?php
/**
 * Title: Header: line under the agency name
 * Slug: nami-staffing/head-line
 * Categories: nami-staffing
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The small line under the agency name in the header.
 */
?>
<!-- wp:paragraph {"className":"ns-brand__line"} -->
<p class="ns-brand__line"><?php echo wp_kses_post( nami_staffing_t( 'head_line_01' ) ); ?></p>
<!-- /wp:paragraph -->
