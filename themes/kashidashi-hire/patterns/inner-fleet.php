<?php
/**
 * Title: Inner: fleet
 * Slug: kashidashi-hire/inner-fleet
 * Categories: kashidashi-hire
 * Inserter: no
 * Description: Fleet page head, full three-tab finder with twelve tiles, copy rows and the spec table.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kh-hero kh-ihead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-hero kh-ihead"><!-- wp:group {"className":"kh-wedge kh-wedge--i","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wedge kh-wedge--i"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__stage kh-ihead__stage","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stage kh-ihead__stage"><!-- wp:group {"className":"kh-hero__photo kh-ihead__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__photo kh-ihead__photo sp-parallax"><!-- wp:group {"className":"kh-hero__stack sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__stack sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kh-ihead__img"} -->
<figure class="wp-block-image size-full kh-ihead__img"><img src="<?php echo kashidashi_hire_img( 'p02-yard-line' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__shade"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-hero__copy kh-ihead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kh-hero__copy kh-ihead__copy"><!-- wp:paragraph {"className":"kh-hero__kicker"} -->
<p class="kh-hero__kicker"><?php echo esc_html( kashidashi_hire_t( 'ih_fleet_kick' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kh-hero__title kh-ihead__title"} -->
<h1 class="wp-block-heading kh-hero__title kh-ihead__title"><span class="kh-strip"><?php echo esc_html( kashidashi_hire_t( 'ih_fleet_h1' ) ); ?></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-dock kh-dock--one","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock kh-dock--one"><!-- wp:group {"className":"kh-dock__b","layout":{"type":"default"}} -->
<div class="wp-block-group kh-dock__b"><!-- wp:paragraph {"className":"kh-dock__next"} -->
<p class="kh-dock__next"><span><?php echo esc_html( kashidashi_hire_t( 'dk_next' ) ); ?></span> <strong><?php echo esc_html( kashidashi_hire_t( 'dk_date' ) ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-dock__req"} -->
<p class="kh-dock__req"><a href="/request/"><?php echo esc_html( kashidashi_hire_t( 'dk_req' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-ilead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-ilead"><!-- wp:group {"className":"kh-ilead__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ilead__in"><!-- wp:paragraph {"className":"kh-lead kh-lead--big sp-reveal sp-reveal--up"} -->
<p class="kh-lead kh-lead--big sp-reveal sp-reveal--up"><?php echo esc_html( kashidashi_hire_t( 'i_fleet_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"finder","align":"full","className":"kh-sec kh-fleet kh-fleet--i","layout":{"type":"default"}} -->
<section id="finder" class="wp-block-group alignfull kh-sec kh-fleet kh-fleet--i"><!-- wp:group {"className":"kh-wipe kh-wipe--fleet sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wipe kh-wipe--fleet sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"kh-wipe__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-wipe__in"><!-- wp:group {"className":"kh-mist","layout":{"type":"default"}} -->
<div class="wp-block-group kh-mist"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-fleet__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-fleet__in"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kashidashi_hire_t( 'fd_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-fleet__title"} -->
<h2 class="wp-block-heading kh-fleet__title"><?php echo esc_html( kashidashi_hire_t( 'ih_fleet_find' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kh-finder","layout":{"type":"default"}} -->
<div class="wp-block-group kh-finder"><!-- wp:html -->
<input class="kh-tabin" type="radio" name="kh-t" id="kh-t1" checked><input class="kh-tabin" type="radio" name="kh-t" id="kh-t2"><input class="kh-tabin" type="radio" name="kh-t" id="kh-t3">
<div class="kh-tabs"><label for="kh-t1"><?php echo esc_html( kashidashi_hire_t( 'fd_t1' ) ); ?></label><label for="kh-t2"><?php echo esc_html( kashidashi_hire_t( 'fd_t2' ) ); ?></label><label for="kh-t3"><?php echo esc_html( kashidashi_hire_t( 'fd_t3' ) ); ?></label></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kh-pane kh-pane1 sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kh-pane kh-pane1 sp-stagger"><!-- wp:group {"className":"kh-tile kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-notch sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p08-compact-excavator' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_m1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'fd_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-notch sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p09-micro-excavator' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_m2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'fd_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-notch sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p10-bucket-teeth' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_m3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'fd_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-notch sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p11-tracked-dumper' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_m4' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'fd_p4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-notch sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p12-site-dumper' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p12' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_m5' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'fd_p5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-notch sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo kashidashi_hire_img( 'p13-roller-drum' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="<?php echo esc_attr( kashidashi_hire_t( 'alt_p13' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_m6' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'fd_p6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><?php echo esc_html( kashidashi_hire_t( 'ff_g' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'ff_gp' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><?php echo esc_html( kashidashi_hire_t( 'ff_a1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'ff_ap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><?php echo esc_html( kashidashi_hire_t( 'ff_a2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'ff_ap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><?php echo esc_html( kashidashi_hire_t( 'ff_a3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'ff_ap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><?php echo esc_html( kashidashi_hire_t( 'ff_a4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'ff_ap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-tile kh-tile--text kh-notch sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"kh-tile__name"} -->
<p class="kh-tile__name"><?php echo esc_html( kashidashi_hire_t( 'ff_a5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kh-tile__price"} -->
<p class="kh-tile__price"><?php echo esc_html( kashidashi_hire_t( 'ff_ai' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-pane kh-pane2","layout":{"type":"default"}} -->
<div class="wp-block-group kh-pane kh-pane2"><!-- wp:group {"className":"kh-jtile kh-notch","layout":{"type":"default"}} -->
<div class="wp-block-group kh-jtile kh-notch"><!-- wp:paragraph {"className":"kh-jtile__name"} -->
<p class="kh-jtile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_j1' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-jtile kh-notch","layout":{"type":"default"}} -->
<div class="wp-block-group kh-jtile kh-notch"><!-- wp:paragraph {"className":"kh-jtile__name"} -->
<p class="kh-jtile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_j2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-jtile kh-notch","layout":{"type":"default"}} -->
<div class="wp-block-group kh-jtile kh-notch"><!-- wp:paragraph {"className":"kh-jtile__name"} -->
<p class="kh-jtile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_j3' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-jtile kh-notch","layout":{"type":"default"}} -->
<div class="wp-block-group kh-jtile kh-notch"><!-- wp:paragraph {"className":"kh-jtile__name"} -->
<p class="kh-jtile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_j4' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-jtile kh-notch","layout":{"type":"default"}} -->
<div class="wp-block-group kh-jtile kh-notch"><!-- wp:paragraph {"className":"kh-jtile__name"} -->
<p class="kh-jtile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_j5' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-jtile kh-notch","layout":{"type":"default"}} -->
<div class="wp-block-group kh-jtile kh-notch"><!-- wp:paragraph {"className":"kh-jtile__name"} -->
<p class="kh-jtile__name"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_j6' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-pane kh-pane3","layout":{"type":"default"}} -->
<div class="wp-block-group kh-pane kh-pane3"><!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><?php echo esc_html( kashidashi_hire_t( 'fd_s1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'fd_s1d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><?php echo esc_html( kashidashi_hire_t( 'fd_s2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'fd_s2d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><?php echo esc_html( kashidashi_hire_t( 'fd_s3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'fd_s3d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-srow","layout":{"type":"default"}} -->
<div class="wp-block-group kh-srow"><!-- wp:heading {"level":3,"className":"kh-srow__t"} -->
<h3 class="wp-block-heading kh-srow__t"><?php echo esc_html( kashidashi_hire_t( 'fd_s4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-srow__d"} -->
<p class="kh-srow__d"><?php echo esc_html( kashidashi_hire_t( 'fd_s4d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-ibody","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-ibody"><!-- wp:group {"className":"kh-ibody__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-ibody__in"><!-- wp:group {"className":"kh-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__l"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-isec__t"} -->
<h2 class="wp-block-heading kh-isec__t"><?php echo esc_html( kashidashi_hire_t( 'i_fleet_h1' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__r"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_fleet_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__l"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-isec__t"} -->
<h2 class="wp-block-heading kh-isec__t"><?php echo esc_html( kashidashi_hire_t( 'i_fleet_h2' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__r"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_fleet_b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec sp-reveal sp-reveal--up"><!-- wp:group {"className":"kh-isec__l","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__l"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kh-isec__t"} -->
<h2 class="wp-block-heading kh-isec__t"><?php echo esc_html( kashidashi_hire_t( 'i_fleet_h3' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kh-isec__r","layout":{"type":"default"}} -->
<div class="wp-block-group kh-isec__r"><!-- wp:paragraph -->
<p><?php echo esc_html( kashidashi_hire_t( 'i_fleet_b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kh-sec kh-specs","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kh-sec kh-specs"><!-- wp:group {"className":"kh-specs__in","layout":{"type":"default"}} -->
<div class="wp-block-group kh-specs__in"><!-- wp:paragraph {"className":"kh-label"} -->
<p class="kh-label"><?php echo esc_html( kashidashi_hire_t( 'sp_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( kashidashi_hire_t( 'sp_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<table class="kh-table kh-table--spec"><thead><tr><th><?php echo esc_html( kashidashi_hire_t( 'sp_h_m' ) ); ?></th><th><?php echo esc_html( kashidashi_hire_t( 'sp_h_w' ) ); ?></th><th><?php echo esc_html( kashidashi_hire_t( 'sp_h_r' ) ); ?></th><th class="kh-table__v"><?php echo esc_html( kashidashi_hire_t( 'sp_h_g' ) ); ?></th></tr></thead><tbody><tr><td data-col="m"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'sp_r1_0' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r1_1' ) ); ?></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r1_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_g' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r1_3' ) ); ?></td></tr><tr><td data-col="m"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'sp_r2_0' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r2_1' ) ); ?></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r2_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_g' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r2_3' ) ); ?></td></tr><tr><td data-col="m"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'sp_r3_0' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r3_1' ) ); ?></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r3_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_g' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r3_3' ) ); ?></td></tr><tr><td data-col="m"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'sp_r4_0' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r4_1' ) ); ?></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r4_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_g' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r4_3' ) ); ?></td></tr><tr><td data-col="m"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'sp_r5_0' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r5_1' ) ); ?></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r5_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_g' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r5_3' ) ); ?></td></tr><tr><td data-col="m"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'sp_r6_0' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r6_1' ) ); ?></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r6_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_g' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r6_3' ) ); ?></td></tr><tr><td data-col="m"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_m' ) ); ?></span><strong><?php echo esc_html( kashidashi_hire_t( 'sp_r7_0' ) ); ?></strong></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_w' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r7_1' ) ); ?></td><td><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_r' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r7_2' ) ); ?></td><td class="kh-table__v"><span class="kh-lab"><?php echo esc_html( kashidashi_hire_t( 'sp_h_g' ) ); ?></span><?php echo esc_html( kashidashi_hire_t( 'sp_r7_3' ) ); ?></td></tr></tbody></table>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
