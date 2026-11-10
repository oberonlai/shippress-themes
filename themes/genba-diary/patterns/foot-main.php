<?php
/**
 * Title: Footer: tile, address, hours, links
 * Slug: genba-diary/foot-main
 * Categories: genba-diary
 * Keywords: construction, site diary, landing
 * Viewport Width: 1440
 * Inserter: no
 * Description: White footer with a top hairline: logo tile, wordmark, address, hours, links and the legal line.
 */
?>
<!-- wp:group {"className":"gd-foot","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull gd-foot"><!-- wp:group {"className":"gd-foot__in","layout":{"type":"default"}} -->
<div class="wp-block-group gd-foot__in"><!-- wp:group {"className":"gd-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group gd-foot__brand"><!-- wp:html -->
<a class="gd-tile gd-tile--sm" href="/" aria-hidden="true" tabindex="-1">GD</a>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"gd-brand"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gd-foot__addr"} -->
<p class="gd-foot__addr"><?php echo esc_html( genba_diary_t( 'addr1' ) ); ?><br><?php echo esc_html( genba_diary_t( 'addr2' ) ); ?><br><?php echo esc_html( genba_diary_t( 'addr3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-foot__links"} -->
<p class="gd-foot__links"><a href="/field-notes/"><?php echo esc_html( genba_diary_t( 'f_notes' ) ); ?></a> <a href="/waitlist/"><?php echo esc_html( genba_diary_t( 'f_wait' ) ); ?></a> <a href="/privacy/"><?php echo esc_html( genba_diary_t( 'f_priv' ) ); ?></a> <a href="/terms/"><?php echo esc_html( genba_diary_t( 'f_terms' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gd-foot__legal"} -->
<p class="gd-foot__legal"><?php echo esc_html( genba_diary_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
