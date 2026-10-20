<?php
/**
 * Title: Header: line under the school name
 * Slug: aozora-primary-school/head-line
 * Categories: aozora-primary-school
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The small line under the school name in the header.
 */
?>
<!-- wp:paragraph {"className":"ap-brand__line"} -->
<p class="ap-brand__line"><?php echo wp_kses_post( aozora_primary_school_t( 'head_line_01' ) ); ?></p>
<!-- /wp:paragraph -->
