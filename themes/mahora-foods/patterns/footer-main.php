<?php
/**
 * Title: Footer: link list and script line
 * Slug: mahora-foods/footer-main
 * Categories: mahora-foods
 * Keywords: staff cafeteria, lunchroom, contract catering
 * Inserter: no
 * Viewport Width: 1440
 * Description: Ink footer with address, hours, three link lists and the script line.
 */
?>
<!-- wp:group {"align": "full", "className": "mf-foot", "layout": {"type": "default"}} -->
<div class="wp-block-group alignfull mf-foot"><!-- wp:group {"className": "mf-foot__in", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-foot__in"><!-- wp:columns {"className":"mf-foot__cols"} -->
<div class="wp-block-columns mf-foot__cols"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:site-title {"level":0,"className":"mf-foot__brand"} /-->

<!-- wp:paragraph {"className": "mf-foot__line"} -->
<p class="mf-foot__line"><?php echo esc_html( mahora_foods_t( 'f_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-foot__line"} -->
<p class="mf-foot__line"><?php echo esc_html( mahora_foods_t( 'f_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-foot__line"} -->
<p class="mf-foot__line"><?php echo esc_html( mahora_foods_t( 'f_phone' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level": 3, "className": "mf-foot__h"} -->
<h3 class="wp-block-heading mf-foot__h"><?php echo esc_html( mahora_foods_t( 'f1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="/how-we-work/"><?php echo esc_html( mahora_foods_t( 'f1_a' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/workplaces/"><?php echo esc_html( mahora_foods_t( 'f1_b' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/menus/"><?php echo esc_html( mahora_foods_t( 'f1_c' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/rates/"><?php echo esc_html( mahora_foods_t( 'f1_d' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level": 3, "className": "mf-foot__h"} -->
<h3 class="wp-block-heading mf-foot__h"><?php echo esc_html( mahora_foods_t( 'f2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="/about/"><?php echo esc_html( mahora_foods_t( 'f2_a' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/case-studies/"><?php echo esc_html( mahora_foods_t( 'f2_b' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/notes/"><?php echo esc_html( mahora_foods_t( 'f2_c' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/contact/"><?php echo esc_html( mahora_foods_t( 'f2_d' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level": 3, "className": "mf-foot__h"} -->
<h3 class="wp-block-heading mf-foot__h"><?php echo esc_html( mahora_foods_t( 'f3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="/starting/"><?php echo esc_html( mahora_foods_t( 'f3_a' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/sites/"><?php echo esc_html( mahora_foods_t( 'f3_b' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/privacy/"><?php echo esc_html( mahora_foods_t( 'f3_c' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"className": "mf-script mf-foot__script"} -->
<p class="mf-script mf-foot__script"><?php echo esc_html( mahora_foods_t( 'f_script' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-foot__copy"} -->
<p class="mf-foot__copy">© Mahora Foods</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className": "mf-top"} -->
<p class="mf-top"><a href="#top" aria-label="<?php echo esc_attr( mahora_foods_t( 'top' ) ); ?>"></a></p>
<!-- /wp:paragraph -->
