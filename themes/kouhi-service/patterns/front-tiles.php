<?php
/**
 * Title: Home: notice and tiles
 * Slug: kouhi-service/front-tiles
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: One-line tinted notice strip and four slab-caps anchor tiles.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-sec ks-wayfind","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ks-sec ks-wayfind"><!-- wp:html -->
<p class="ks-notice"><span><?php echo esc_html( kouhi_service_t( 'notice' ) ); ?></span><a href="#visits"><?php echo esc_html( kouhi_service_t( 'notice_link' ) ); ?></a></p>
<!-- /wp:html -->

<!-- wp:html -->
<nav class="ks-tiles sp-stagger" aria-label="<?php echo esc_attr( kouhi_service_t( 'tiles_aria' ) ); ?>"><a class="ks-tile sp-reveal sp-reveal--up" href="#suits"><?php echo kouhi_service_icon( 'suits' ); ?><span class="ks-tile__t"><?php echo esc_html( kouhi_service_t( 'tile_0' ) ); ?></span><span class="ks-tile__s"><?php echo esc_html( kouhi_service_t( 'tile_0_s' ) ); ?></span><img class="ks-tile__img" src="<?php echo kouhi_service_img( 'p11-beans.webp' ); ?>" alt="" width="600" height="400" loading="lazy"/></a><a class="ks-tile sp-reveal sp-reveal--up" href="#service"><?php echo kouhi_service_icon( 'service' ); ?><span class="ks-tile__t"><?php echo esc_html( kouhi_service_t( 'tile_1' ) ); ?></span><span class="ks-tile__s"><?php echo esc_html( kouhi_service_t( 'tile_1_s' ) ); ?></span><img class="ks-tile__img" src="<?php echo kouhi_service_img( 'p12-panel.webp' ); ?>" alt="" width="600" height="400" loading="lazy"/></a><a class="ks-tile sp-reveal sp-reveal--up" href="#visits"><?php echo kouhi_service_icon( 'visits' ); ?><span class="ks-tile__t"><?php echo esc_html( kouhi_service_t( 'tile_2' ) ); ?></span><span class="ks-tile__s"><?php echo esc_html( kouhi_service_t( 'tile_2_s' ) ); ?></span><img class="ks-tile__img" src="<?php echo kouhi_service_img( 'p13-desk.webp' ); ?>" alt="" width="600" height="400" loading="lazy"/></a><a class="ks-tile sp-reveal sp-reveal--up" href="#plans"><?php echo kouhi_service_icon( 'plans' ); ?><span class="ks-tile__t"><?php echo esc_html( kouhi_service_t( 'tile_3' ) ); ?></span><span class="ks-tile__s"><?php echo esc_html( kouhi_service_t( 'tile_3_s' ) ); ?></span><img class="ks-tile__img" src="<?php echo kouhi_service_img( 'p14-card.webp' ); ?>" alt="" width="600" height="400" loading="lazy"/></a></nav>
<!-- /wp:html --></section>
<!-- /wp:group -->
