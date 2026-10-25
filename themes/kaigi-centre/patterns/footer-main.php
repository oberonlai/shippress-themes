<?php
/**
 * Title: Footer: four columns
 * Slug: kaigi-centre/footer-main
 * Inserter: no
 * Categories: kaigi-centre
 * Keywords: conference, footer-main
 * Viewport Width: 1440
 * Description: Dark footer with the brand line and three link columns.
 */
?>
<!-- wp:group {"align":"full","className":"kc-foot","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-foot">
<!-- wp:group {"className":"kc-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group kc-foot__cols">
<!-- wp:group {"className":"kc-foot__col kc-foot__col--brand","layout":{"type":"default"}} -->
<div class="wp-block-group kc-foot__col kc-foot__col--brand">
<!-- wp:paragraph {"className":"kc-foot__name"} -->
<p class="kc-foot__name"><?php echo esc_html( kaigi_centre_t( 'wordmark' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__line"} -->
<p class="kc-foot__line"><?php echo esc_html( kaigi_centre_t( 'f_line' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-foot__col">
<!-- wp:paragraph {"className":"kc-foot__h"} -->
<p class="kc-foot__h"><?php echo esc_html( kaigi_centre_t( 'f_h1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/meridian-hall/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_a1' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/linden-room/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_a2' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/the-atrium/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_a3' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/corporate-offsites/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_a4' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-foot__col">
<!-- wp:paragraph {"className":"kc-foot__h"} -->
<p class="kc-foot__h"><?php echo esc_html( kaigi_centre_t( 'f_h2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/rates/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_b1' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/plan-an-event/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_b2' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/food-and-hospitality/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_b3' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/associations/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_b4' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-foot__col">
<!-- wp:paragraph {"className":"kc-foot__h"} -->
<p class="kc-foot__h"><?php echo esc_html( kaigi_centre_t( 'f_h3' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_c1' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/getting-here/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_c2' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_c3' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__a"} -->
<p class="kc-foot__a"><a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'f_c4' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-foot__base","layout":{"type":"default"}} -->
<div class="wp-block-group kc-foot__base">
<!-- wp:paragraph {"className":"kc-foot__small"} -->
<p class="kc-foot__small"><?php echo esc_html( kaigi_centre_t( 'f_addr' ) ); ?> · <?php echo esc_html( kaigi_centre_t( 'f_hours' ) ); ?> · <?php echo esc_html( kaigi_centre_t( 'f_phone' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-foot__small"} -->
<p class="kc-foot__small"><?php echo esc_html( kaigi_centre_t( 'f_copy' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
