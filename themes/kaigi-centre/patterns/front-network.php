<?php
/**
 * Title: Home: room network
 * Slug: kaigi-centre/front-network
 * Categories: kaigi-centre
 * Keywords: conference, front-network
 * Viewport Width: 1440
 * Description: Floor plan line drawing beside the plum panel: each room, capacity and who it is for.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-network","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-network">
<!-- wp:group {"className":"kc-network__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-network__head">
<!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label"><?php echo esc_html( kaigi_centre_t( 'net_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo esc_html( kaigi_centre_t( 'net_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-split kc-split--net","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split kc-split--net">
<!-- wp:group {"className":"kc-split__main kc-plan","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__main kc-plan">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-plan__img"} -->
<figure class="wp-block-image size-full kc-plan__img"><img src="<?php echo kaigi_centre_img( 'floorplan.svg' ); ?>" alt="<?php echo esc_attr( kaigi_centre_t( 'alt_floorplan' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-split__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-split__panel">
<!-- wp:paragraph {"className":"kc-label kc-label--light"} -->
<p class="kc-label kc-label--light"><?php echo esc_html( kaigi_centre_t( 'net_panel_h' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"kc-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kc-rows">
<!-- wp:group {"className":"kc-row kc-row--net","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--net">
<!-- wp:group {"className":"kc-row__top","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__top">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/meridian-hall/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r0_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r0_cl' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-row__who"} -->
<p class="kc-row__who"><?php echo esc_html( kaigi_centre_t( 'r0_w' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row kc-row--net","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--net">
<!-- wp:group {"className":"kc-row__top","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__top">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/linden-room/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r1_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r1_cl' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-row__who"} -->
<p class="kc-row__who"><?php echo esc_html( kaigi_centre_t( 'r1_w' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row kc-row--net","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--net">
<!-- wp:group {"className":"kc-row__top","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__top">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r2_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r2_cl' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-row__who"} -->
<p class="kc-row__who"><?php echo esc_html( kaigi_centre_t( 'r2_w' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row kc-row--net","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--net">
<!-- wp:group {"className":"kc-row__top","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__top">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r3_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r3_cl' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-row__who"} -->
<p class="kc-row__who"><?php echo esc_html( kaigi_centre_t( 'r3_w' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-row kc-row--net","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row kc-row--net">
<!-- wp:group {"className":"kc-row__top","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__top">
<!-- wp:paragraph {"className":"kc-row__name"} -->
<p class="kc-row__name"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'r4_n' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-row__cap"} -->
<p class="kc-row__cap"><?php echo esc_html( kaigi_centre_t( 'r4_cl' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-row__who"} -->
<p class="kc-row__who"><?php echo esc_html( kaigi_centre_t( 'r4_w' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-hero__link"} -->
<p class="kc-hero__link"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'net_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-network__note"} -->
<p class="kc-network__note"><?php echo esc_html( kaigi_centre_t( 'net_note' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
