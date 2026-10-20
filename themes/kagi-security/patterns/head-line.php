<?php
/**
 * Title: Header: line under the firm name
 * Slug: kagi-security/head-line
 * Categories: kagi-security
 * Keywords: header
 * Viewport Width: 1440
 * Inserter: no
 * Description: The small line under the firm name in the header.
 */
?>
<!-- wp:paragraph {"className":"ks-brand__line"} -->
<p class="ks-brand__line"><?php echo wp_kses_post( kagi_security_t( 'head_line_01' ) ); ?></p>
<!-- /wp:paragraph -->
