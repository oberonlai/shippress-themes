<?php
/**
 * Title: Home: fleet finder
 * Slug: kashidashi-hire/front-finder
 * Categories: kashidashi-hire
 * Description: Grey finder panel with three flat tabs, CSS-only, first tab open without JavaScript.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"fleet","align":"full","className":"kh-sec kh-fleet","layout":{"type":"default"}} -->
<section id="fleet" class="wp-block-group alignfull kh-sec kh-fleet"><!-- wp:group {"className":"kh-wipe kh-wipe--fleet sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
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
<h2 class="wp-block-heading kh-fleet__title"><?php echo esc_html( kashidashi_hire_t( 'fd_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kh-lead"} -->
<p class="kh-lead"><?php echo esc_html( kashidashi_hire_t( 'fd_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"kh-finder","layout":{"type":"default"}} -->
<div class="wp-block-group kh-finder"><!-- wp:html -->
<input class="kh-tabin" type="radio" name="kh-tab" id="kh-t1" checked><input class="kh-tabin" type="radio" name="kh-tab" id="kh-t2"><input class="kh-tabin" type="radio" name="kh-tab" id="kh-t3">
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
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kh-more"} -->
<p class="kh-more"><a href="/fleet/"><?php echo esc_html( kashidashi_hire_t( 'fd_all' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
