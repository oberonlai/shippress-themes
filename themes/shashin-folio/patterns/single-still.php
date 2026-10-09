<?php
/**
 * Title: Single still — a full-bleed pause with a subtitle
 * Slug: shashin-folio/single-still
 * Categories: shashin-folio, gallery, featured
 * Keywords: image, full width, still, pause, quote, subtitle
 * Viewport Width: 1440
 * Description: One photograph across the full width in a letterbox crop, then a single line set like a film subtitle, centred, with a long empty pause on either side.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-section sf-pause","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-section sf-pause" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"full","className":"is-style-letterbox"} -->
<figure class="wp-block-image alignfull size-full is-style-letterbox"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/harbour-night.svg' ) ); ?>" alt="A small harbour at night, lights reflected in still black water"/><figcaption class="wp-element-caption">Fr. 09 — Manabe island harbour, Okayama · 23:40 · from the series Inland Sea</figcaption></figure>
<!-- /wp:image -->

<!-- wp:quote {"className":"is-style-subtitle","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<blockquote class="wp-block-quote is-style-subtitle" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:paragraph -->
<p>“Nothing happens in my pictures. That is the point — I want you to hear it.”</p>
<!-- /wp:paragraph --><cite>Ren Aoki, in conversation with Tidal Quarterly, 2025</cite></blockquote>
<!-- /wp:quote --></section>
<!-- /wp:group -->
