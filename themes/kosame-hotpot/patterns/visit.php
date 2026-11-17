<?php
/**
 * Title: Home: visit, on a wash
 * Slug: kosame-hotpot/visit
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Description: The access block on a pink-grey to white gradient: a wide photograph, a name line, the 498px info table and the closing booking frame.
 */
?>
<!-- wp:group {"anchor":"visit","tagName":"section","className":"ks-sec ks-wash","layout":{"type":"default"}} -->
<section id="visit" class="wp-block-group ks-sec ks-wash"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'vh_visit_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'vh_visit' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:group {"className":"ks-photo sp-parallax sp-reveal sp-reveal--up ks-photo--wide","layout":{"type":"default"}} -->
<div class="wp-block-group ks-photo sp-parallax sp-reveal sp-reveal--up ks-photo--wide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kosame_hotpot_img( 'storefront-rain.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-nameline sp-reveal sp-reveal--up"} -->
<p class="ks-nameline sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-tablewrap ks-tablewrap--info","layout":{"type":"default"}} -->
<div class="wp-block-group ks-tablewrap ks-tablewrap--info"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:table {"className":"ks-info"} -->
<figure class="wp-block-table ks-info"><table><tbody><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_addr' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_addr_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_dinner' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_dinner_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_lunch' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_lunch_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_closed' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_closed_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_desk' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_desk_v' ) ); ?></td></tr><tr><td><?php echo esc_html( kosame_hotpot_t( 'info_phone' ) ); ?></td><td><?php echo esc_html( kosame_hotpot_t( 'info_phone_v' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-body sp-reveal sp-reveal--up"} -->
<p class="ks-body sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'visit_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kosame-hotpot/book-frame"} /--></section>
<!-- /wp:group -->
