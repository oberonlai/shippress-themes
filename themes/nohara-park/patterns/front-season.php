<?php
/**
 * Title: Home: what the wardens look after out of season
 * Slug: nohara-park/front-season
 * Categories: nohara-park
 * Viewport Width: 1440
 * Description: Title straddling a pale band, then two alternating photograph-and-text rows for November to February and for March.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"np-seasonsec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull np-seasonsec"><!-- wp:heading {"className":"np-h2 np-h2--c sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading np-h2 np-h2--c sp-reveal sp-reveal--down"><?php echo esc_html( nohara_park_t( 'se_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"np-wrap np-season","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-season"><!-- wp:group {"className":"np-season__row","layout":{"type":"default"}} -->
<div class="wp-block-group np-season__row"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-season__pic"} -->
<figure class="wp-block-image size-full np-season__pic"><img src="<?php echo nohara_park_img( 'w1' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_W1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-season__txt sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-season__txt sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"np-month"} -->
<p class="np-month"><?php echo esc_html( nohara_park_t( 'se_1_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"np-h3","level":3} -->
<h3 class="wp-block-heading np-h3"><?php echo esc_html( nohara_park_t( 'se_1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'se_1_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'se_1_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"np-season__row np-season__row--flip","layout":{"type":"default"}} -->
<div class="wp-block-group np-season__row np-season__row--flip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"np-season__pic"} -->
<figure class="wp-block-image size-full np-season__pic"><img src="<?php echo nohara_park_img( 'w2' ); ?>" alt="<?php echo esc_attr( nohara_park_t( 'alt_W2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"np-season__txt sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group np-season__txt sp-reveal sp-reveal--down"><!-- wp:paragraph {"className":"np-month"} -->
<p class="np-month"><?php echo esc_html( nohara_park_t( 'se_2_m' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"np-h3","level":3} -->
<h3 class="wp-block-heading np-h3"><?php echo esc_html( nohara_park_t( 'se_2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'se_2_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"np-prose"} -->
<p class="np-prose"><?php echo esc_html( nohara_park_t( 'se_2_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"np-textlink"} -->
<p class="np-textlink"><a href="<?php echo esc_url( home_url( '/out-of-season/' ) ); ?>"><?php echo esc_html( nohara_park_t( 'se_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
