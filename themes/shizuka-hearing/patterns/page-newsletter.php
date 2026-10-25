<?php
/**
 * Title: Page: Newsletter
 * Slug: shizuka-hearing/page-newsletter
 * Categories: shizuka-hearing
 * Viewport Width: 1440
 * Description: Inner page newsletter: scattered tile head with title strips, then the page content.
 */
?>
<!-- wp:group {"align":"full","className":"sh-phead sp-parallax sh-phead--t1","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-phead sp-parallax sh-phead--t1"><!-- wp:group {"className":"sh-ptiles sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sh-ptiles sp-parallax__layer"><?php echo shizuka_hearing_img( 'h12', 'sh-tile sh-pt sh-pt--a' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h04', 'sh-tile sh-pt sh-pt--b' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-phead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sh-phead__copy"><!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow"><?php echo wp_kses_post( shizuka_hearing_t( 'k26bb92a2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub"><?php echo wp_kses_post( shizuka_hearing_t( 'ka401681e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sh-pword","ariaHidden":true} -->
<p class="sh-pword" aria-hidden="true"><span class="sh-strip__in"><?php echo wp_kses_post( shizuka_hearing_t( 'k17a53d1a' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sh-strip sh-phead__h1"} -->
<h1 class="wp-block-heading sh-strip sh-phead__h1"><span class="sh-strip__in"><?php echo wp_kses_post( shizuka_hearing_t( 'k55d71208' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-lead"} -->
<p class="sh-lead"><?php echo wp_kses_post( shizuka_hearing_t( 'k2dd3ff2d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sh-prose sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-prose sp-stagger"><!-- wp:group {"className":"sh-prose__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"sh-prose__h"} -->
<h2 class="wp-block-heading sh-prose__h"><?php echo wp_kses_post( shizuka_hearing_t( 'k6244d675' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sh-prose__b","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__b"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'kcb8f057a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-prose__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"sh-prose__h"} -->
<h2 class="wp-block-heading sh-prose__h"><?php echo wp_kses_post( shizuka_hearing_t( 'k85148a00' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sh-prose__b","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__b"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'k18a495cb' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sh-book","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-book"><!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow"><?php echo wp_kses_post( shizuka_hearing_t( 'k45b73ef4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub"><?php echo wp_kses_post( shizuka_hearing_t( 'k70ae9981' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-inner sh-book__in","layout":{"type":"default"}} -->
<div class="wp-block-group sh-inner sh-book__in"><!-- wp:heading {"level":2,"className":"sh-prose__h"} -->
<h2 class="wp-block-heading sh-prose__h"><?php echo wp_kses_post( shizuka_hearing_t( 'kc65c8d5c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'k1ca0fe45' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="sh-form" action="mailto:letter@shizuka-hearing.example" method="post" enctype="text/plain"><p><label for="sh-n"><?php echo wp_kses_post( shizuka_hearing_t( 'k49ee3087' ) ); ?></label><input id="sh-n" name="name" type="text" required></p><p><label for="sh-e"><?php echo wp_kses_post( shizuka_hearing_t( 'kce8ae9da' ) ); ?></label><input id="sh-e" name="email" type="email" required></p><p><button type="submit" class="sh-formbtn"><?php echo wp_kses_post( shizuka_hearing_t( 'k5a5b92ae' ) ); ?></button></p></form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
