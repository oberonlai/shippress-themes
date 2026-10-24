<?php
/**
 * Title: Footer: pale band
 * Slug: hozen-facilities/footer-main
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Pale footer band: wordmark and one sentence, four columns (hubs, office hours, pages, services) and a copyright line under a hairline.
 */
?>
<!-- wp:group {"align":"full","className":"hz-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-footer">
<!-- wp:group {"className":"hz-foot__top","layout":{"type":"default"}} -->
<div class="wp-block-group hz-foot__top">
<!-- wp:paragraph {"className":"hz-foot__mark"} -->
<p class="hz-foot__mark"><?php echo esc_html( hozen_facilities_t( 'wordmark' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__line"} -->
<p class="hz-foot__line"><?php echo esc_html( hozen_facilities_t( 'f_line' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-foot__cols","layout":{"type":"default"}} -->
<div class="wp-block-group hz-foot__cols">
<!-- wp:group {"className":"hz-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hz-foot__col">
<!-- wp:paragraph {"className":"hz-foot__h"} -->
<p class="hz-foot__h"><?php echo esc_html( hozen_facilities_t( 'f_h3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__p"} -->
<p class="hz-foot__p"><?php echo esc_html( hozen_facilities_t( 'f_hub1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__p"} -->
<p class="hz-foot__p"><?php echo esc_html( hozen_facilities_t( 'f_hub2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__p"} -->
<p class="hz-foot__p"><?php echo esc_html( hozen_facilities_t( 'f_hub3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__p"} -->
<p class="hz-foot__p"><?php echo esc_html( hozen_facilities_t( 'f_hub4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hz-foot__col">
<!-- wp:paragraph {"className":"hz-foot__h"} -->
<p class="hz-foot__h"><?php echo esc_html( hozen_facilities_t( 'f_h1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__p"} -->
<p class="hz-foot__p"><?php echo esc_html( hozen_facilities_t( 'f_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__p"} -->
<p class="hz-foot__p"><?php echo esc_html( hozen_facilities_t( 'f_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_cl' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hz-foot__col">
<!-- wp:paragraph {"className":"hz-foot__h"} -->
<p class="hz-foot__h"><?php echo esc_html( hozen_facilities_t( 'f_h4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/sites/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_n1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_n2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/call-outs/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_n3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/compliance/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_n4' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/prices/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_n5' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_n6' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/field-notes/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_n7' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_n8' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-foot__col","layout":{"type":"default"}} -->
<div class="wp-block-group hz-foot__col">
<!-- wp:paragraph {"className":"hz-foot__h"} -->
<p class="hz-foot__h"><?php echo esc_html( hozen_facilities_t( 'f_h5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/services/#planned' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_s1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/services/#reactive' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_s2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/services/#desk' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_s3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-foot__link"} -->
<p class="hz-foot__link"><a href="<?php echo esc_url( home_url( '/call-outs/#report' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_s4' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-foot__bar","layout":{"type":"default"}} -->
<div class="wp-block-group hz-foot__bar">
<!-- wp:paragraph {"className":"hz-foot__copy"} -->
<p class="hz-foot__copy"><?php echo esc_html( hozen_facilities_t( 'f_copy' ) ); ?> · <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'f_priv' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
