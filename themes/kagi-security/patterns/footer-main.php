<?php
/**
 * Title: Footer: firm name, notes, links, office details and the base line
 * Slug: kagi-security/footer-main
 * Categories: kagi-security
 * Keywords: footer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The footer: the firm name and line, the monthly notes blurb, the page links, the synced office details and the legal line.
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"ks-foot","layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull ks-foot"><!-- wp:group {"align":"wide","className":"ks-foot__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-foot__grid"><!-- wp:group {"className":"ks-foot__brand","layout":{"type":"default"}} -->
<div class="wp-block-group ks-foot__brand"><!-- wp:paragraph {"className":"ks-foot__mark"} -->
<p class="ks-foot__mark"><?php echo wp_kses_post( kagi_security_t( 'footer_main_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-foot__line"} -->
<p class="ks-foot__line"><?php echo wp_kses_post( kagi_security_t( 'footer_main_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-foot__letter"} -->
<p class="ks-foot__letter"><?php echo wp_kses_post( kagi_security_t( 'footer_main_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-foot__links","layout":{"type":"default"}} -->
<div class="wp-block-group ks-foot__links"><!-- wp:paragraph {"className":"ks-foot__kicker"} -->
<p class="ks-foot__kicker"><?php echo wp_kses_post( kagi_security_t( 'footer_main_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-foot__list"} -->
<p class="ks-foot__list"><?php echo wp_kses_post( kagi_security_t( 'footer_main_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-foot__school","layout":{"type":"default"}} -->
<div class="wp-block-group ks-foot__school"><!-- wp:pattern {"slug":"kagi-security/office"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"ks-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-foot__base"><!-- wp:paragraph {"className":"ks-foot__legal"} -->
<p class="ks-foot__legal"><?php echo wp_kses_post( kagi_security_t( 'footer_main_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-foot__legal"} -->
<p class="ks-foot__legal"><?php echo wp_kses_post( kagi_security_t( 'footer_main_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
