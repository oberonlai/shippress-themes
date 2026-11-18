<?php
/**
 * Title: Footer
 * Slug: taruki-distillery/foot-main
 * Categories: taruki-distillery
 * Inserter: no
 * Description: Charcoal footer: the distillery, where and when, the pages, the legal line and a page-top square.
 */
?>
<!-- wp:group {"align":"full","className":"td-foot","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull td-foot"><!-- wp:columns {"align":"wide","className":"td-foot__cols"} -->
<div class="wp-block-columns alignwide td-foot__cols"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:site-title {"level":0,"className":"td-foot__brand"} /-->

<!-- wp:paragraph {"className":"td-foot__p"} -->
<p class="td-foot__p"><?php echo esc_html( taruki_t( 'foot_about' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"td-caps td-caps--light"} -->
<p class="td-caps td-caps--light"><?php echo esc_html( taruki_t( 'foot_visit' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-foot__p"} -->
<p class="td-foot__p"><?php echo esc_html( taruki_t( 'foot_addr' ) ); ?><br><?php echo esc_html( taruki_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"td-caps td-caps--light"} -->
<p class="td-caps td-caps--light"><?php echo esc_html( taruki_t( 'foot_contact' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-foot__p"} -->
<p class="td-foot__p"><a href="mailto:hello@taruki-distillery.example">hello@taruki-distillery.example</a><br>+00 1234 5678</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"align":"wide","className":"td-foot__legal"} -->
<p class="alignwide td-foot__legal"><?php echo esc_html( taruki_t( 'legal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-top"} -->
<p class="td-top"><a href="#" aria-label="<?php echo taruki_a( 'page_top' ); ?>"><span aria-hidden="true"><?php echo esc_html( taruki_t( 'page_top_arrow' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
