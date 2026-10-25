<?php
/**
 * Title: Home: visit and open day
 * Slug: kaigi-centre/front-visit
 * Categories: kaigi-centre
 * Keywords: conference, front-visit
 * Viewport Width: 1440
 * Description: Facade photograph beside the plum panel with address, hours and open day.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-visit","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-visit">
<!-- wp:group {"className":"kc-split kc-split--visit","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split kc-split--visit">
<!-- wp:group {"className":"kc-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__main">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-visit__img"} -->
<figure class="wp-block-image size-full kc-visit__img"><img src="<?php echo kaigi_centre_img( 'exterior-quay.webp' ); ?>" alt="<?php echo esc_attr( kaigi_centre_t( 'alt_exterior' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-split__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__panel">
<!-- wp:paragraph {"className":"kc-label kc-label--light"} -->
<p class="kc-label kc-label--light"><?php echo esc_html( kaigi_centre_t( 'visit_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-h2 kc-h2--panel"} -->
<h2 class="wp-block-heading kc-h2 kc-h2--panel"><?php echo esc_html( kaigi_centre_t( 'visit_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"kc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-rows">
<!-- wp:group {"className":"kc-row kc-row--info","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--info">
<!-- wp:paragraph {"className":"kc-row__lab"} -->
<p class="kc-row__lab"><?php echo esc_html( kaigi_centre_t( 'v0_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__val"} -->
<p class="kc-row__val"><?php echo esc_html( kaigi_centre_t( 'v0_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row kc-row--info","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--info">
<!-- wp:paragraph {"className":"kc-row__lab"} -->
<p class="kc-row__lab"><?php echo esc_html( kaigi_centre_t( 'v1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__val"} -->
<p class="kc-row__val"><?php echo esc_html( kaigi_centre_t( 'v1_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row kc-row--info","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--info">
<!-- wp:paragraph {"className":"kc-row__lab"} -->
<p class="kc-row__lab"><?php echo esc_html( kaigi_centre_t( 'v2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__val"} -->
<p class="kc-row__val"><?php echo esc_html( kaigi_centre_t( 'v2_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row kc-row--info","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--info">
<!-- wp:paragraph {"className":"kc-row__lab"} -->
<p class="kc-row__lab"><?php echo esc_html( kaigi_centre_t( 'v3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__val"} -->
<p class="kc-row__val"><?php echo esc_html( kaigi_centre_t( 'v3_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row kc-row--info","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--info">
<!-- wp:paragraph {"className":"kc-row__lab"} -->
<p class="kc-row__lab"><?php echo esc_html( kaigi_centre_t( 'v4_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__val"} -->
<p class="kc-row__val"><?php echo esc_html( kaigi_centre_t( 'v4_v' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"kc-visit__btn"} -->
<div class="wp-block-buttons kc-visit__btn">
<!-- wp:button {"className":"kc-btn"} -->
<div class="wp-block-button kc-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'visit_btn' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
