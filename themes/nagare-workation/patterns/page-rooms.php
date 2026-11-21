<?php
/**
 * Title: Page: Rooms
 * Slug: nagare-workation/page-rooms
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Two-pane page head with a Window Studio photograph, one label-cell price board per room type and a right-edge photo strip.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-phead"><!-- wp:group {"className":"nw-phead__photo","layout":{"type":"default"}} -->
<div class="wp-block-group nw-phead__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p16-window-studio.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group nw-phead__text"><!-- wp:paragraph {"className":"nw-label nw-phead__label"} -->
<p class="nw-label nw-phead__label"><?php echo esc_html( nagare_workation_t( 'nav_rooms' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"nw-phead__h"} -->
<h1 class="wp-block-heading nw-phead__h"><?php echo esc_html( nagare_workation_t( 'rm_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-phead__lede"} -->
<p class="nw-phead__lede"><?php echo esc_html( nagare_workation_t( 'rm_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'rm_s1_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">01</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'rm_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--board","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--board"><!-- wp:group {"className":"nw-board","layout":{"type":"default"}} -->
<div class="wp-block-group nw-board"><!-- wp:group {"className":"nw-row nw-row--price","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--price"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value nw-value--bare","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value nw-value--bare"><!-- wp:paragraph {"className":"nw-price"} -->
<p class="nw-price"><span class="nw-num nw-num--sm"><?php echo esc_html( nagare_workation_t( 'rm_desk_wn' ) ); ?></span><span class="nw-unit"><?php echo esc_html( nagare_workation_t( 'rm_uw' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-row nw-row--price","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--price"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value nw-value--bare","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value nw-value--bare"><!-- wp:paragraph {"className":"nw-price"} -->
<p class="nw-price"><span class="nw-num nw-num--sm"><?php echo esc_html( nagare_workation_t( 'rm_desk_mn' ) ); ?></span><span class="nw-unit"><?php echo esc_html( nagare_workation_t( 'rm_um' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-row nw-row--incl nw-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--incl nw-row--spec"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-stack","layout":{"type":"default"}} -->
<div class="wp-block-group nw-stack"><!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_sz' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rm_desk_sz' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-plus"} -->
<p class="nw-plus"><?php echo esc_html( nagare_workation_t( 'rates_plus' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_ct' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rm_desk_ct' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-plus"} -->
<p class="nw-plus"><?php echo esc_html( nagare_workation_t( 'rates_plus' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_fu' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rm_fu_v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-plus"} -->
<p class="nw-plus"><?php echo esc_html( nagare_workation_t( 'rates_plus' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_dk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rm_desk_dk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--sm","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--sm"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-sect","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'rm_s2_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">02</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-sect__body","layout":{"type":"default"}} -->
<div class="wp-block-group nw-sect__body"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'rm_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-sec--board","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-sec--board"><!-- wp:group {"className":"nw-board","layout":{"type":"default"}} -->
<div class="wp-block-group nw-board"><!-- wp:group {"className":"nw-row nw-row--price","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--price"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_w' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value nw-value--bare","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value nw-value--bare"><!-- wp:paragraph {"className":"nw-price"} -->
<p class="nw-price"><span class="nw-num nw-num--sm"><?php echo esc_html( nagare_workation_t( 'rm_win_wn' ) ); ?></span><span class="nw-unit"><?php echo esc_html( nagare_workation_t( 'rm_uw' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-row nw-row--price","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--price"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_m' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value nw-value--bare","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value nw-value--bare"><!-- wp:paragraph {"className":"nw-price"} -->
<p class="nw-price"><span class="nw-num nw-num--sm"><?php echo esc_html( nagare_workation_t( 'rm_win_mn' ) ); ?></span><span class="nw-unit"><?php echo esc_html( nagare_workation_t( 'rm_um' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-row nw-row--incl nw-row--spec","layout":{"type":"default"}} -->
<div class="wp-block-group nw-row nw-row--incl nw-row--spec"><!-- wp:group {"className":"nw-cell nw-cell--label","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--label"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_spec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-stack","layout":{"type":"default"}} -->
<div class="wp-block-group nw-stack"><!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_sz' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rm_win_sz' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-plus"} -->
<p class="nw-plus"><?php echo esc_html( nagare_workation_t( 'rates_plus' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_ct' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rm_win_ct' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-plus"} -->
<p class="nw-plus"><?php echo esc_html( nagare_workation_t( 'rates_plus' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_fu' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rm_fu_vw' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-plus"} -->
<p class="nw-plus"><?php echo esc_html( nagare_workation_t( 'rates_plus' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-subrow","layout":{"type":"default"}} -->
<div class="wp-block-group nw-subrow"><!-- wp:group {"className":"nw-cell nw-cell--sub","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cell nw-cell--sub"><!-- wp:paragraph {"className":"nw-cell__t"} -->
<p class="nw-cell__t"><?php echo esc_html( nagare_workation_t( 'rm_dk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-value","layout":{"type":"default"}} -->
<div class="wp-block-group nw-value"><!-- wp:paragraph {"className":"nw-value__t"} -->
<p class="nw-value__t"><?php echo esc_html( nagare_workation_t( 'rm_win_dk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-cw nw-cw--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-cw nw-cw--inner"><!-- wp:group {"className":"nw-cw__top","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cw__top"><!-- wp:group {"className":"nw-cw__text","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cw__text"><!-- wp:group {"className":"nw-open nw-open--stack sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open nw-open--stack sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'rm_s3_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label">03</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'rm_s3_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-cw__photos","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cw__photos"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full nw-ph sp-reveal sp-reveal--zoom"><img src="<?php echo nagare_workation_img( 'p01-desk-call.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full nw-ph sp-reveal sp-reveal--zoom"><img src="<?php echo nagare_workation_img( 'p05-room-arrival.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full nw-ph sp-reveal sp-reveal--zoom"><img src="<?php echo nagare_workation_img( 'p17-coffee-pour.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p17' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--band nw-ctaband","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--band nw-ctaband"><!-- wp:group {"className":"nw-wrap nw-ctaband__in","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap nw-ctaband__in"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'cta_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"nw-btns"} -->
<div class="wp-block-buttons nw-btns"><!-- wp:button {"className":"nw-pill nw-pill--fill"} -->
<div class="wp-block-button nw-pill nw-pill--fill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( nagare_workation_t( 'bk_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
