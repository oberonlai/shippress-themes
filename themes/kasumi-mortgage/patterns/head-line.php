<?php
/**
 * Title: Header: line under the school name
 * Slug: kasumi-mortgage/head-line
 * Categories: kasumi-mortgage
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The small line under the school name in the header.
 */
?>
<!-- wp:paragraph {"className":"km-brand__line"} -->
<p class="km-brand__line"><?php echo wp_kses_post( kasumi_mortgage_t( 'head_line_01' ) ); ?></p>
<!-- /wp:paragraph -->
