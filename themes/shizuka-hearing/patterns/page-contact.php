<?php
/**
 * Title: Page: Visit & Contact
 * Slug: shizuka-hearing/page-contact
 * Categories: shizuka-hearing
 * Viewport Width: 1440
 * Description: Inner page contact: scattered tile head with title strips, then the page content.
 */
?>
<!-- wp:group {"align":"full","className":"sh-phead sp-parallax sh-phead--t2","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-phead sp-parallax sh-phead--t2"><!-- wp:group {"className":"sh-ptiles sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sh-ptiles sp-parallax__layer"><?php echo shizuka_hearing_img( 'h15', 'sh-tile sh-pt sh-pt--a' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo shizuka_hearing_img( 'h06', 'sh-tile sh-pt sh-pt--b' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-phead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sh-phead__copy"><!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow"><?php echo wp_kses_post( shizuka_hearing_t( 'kd5926a99' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub"><?php echo wp_kses_post( shizuka_hearing_t( 'ka8ee1544' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sh-pword","ariaHidden":true} -->
<p class="sh-pword" aria-hidden="true"><span class="sh-strip__in"><?php echo wp_kses_post( shizuka_hearing_t( 'ke5b24420' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sh-strip sh-phead__h1"} -->
<h1 class="wp-block-heading sh-strip sh-phead__h1"><span class="sh-strip__in"><?php echo wp_kses_post( shizuka_hearing_t( 'k83120999' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sh-lead"} -->
<p class="sh-lead"><?php echo wp_kses_post( shizuka_hearing_t( 'k14e7df5d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sh-prose sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-prose sp-stagger"><!-- wp:group {"className":"sh-prose__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"sh-prose__h"} -->
<h2 class="wp-block-heading sh-prose__h"><?php echo wp_kses_post( shizuka_hearing_t( 'k4ce9fc11' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sh-prose__b","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__b"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'k89a810b4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-prose__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__item sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"sh-prose__h"} -->
<h2 class="wp-block-heading sh-prose__h"><?php echo wp_kses_post( shizuka_hearing_t( 'k795512b3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sh-prose__b","layout":{"type":"default"}} -->
<div class="wp-block-group sh-prose__b"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'kb6fe7e43' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sh-book","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sh-book"><!-- wp:group {"className":"sh-head","layout":{"type":"default"}} -->
<div class="wp-block-group sh-head"><!-- wp:paragraph {"className":"sh-eyebrow"} -->
<p class="sh-eyebrow"><?php echo wp_kses_post( shizuka_hearing_t( 'kee97c651' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sh-sub"} -->
<p class="sh-sub"><?php echo wp_kses_post( shizuka_hearing_t( 'k77befd2b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sh-inner sh-book__in","layout":{"type":"default"}} -->
<div class="wp-block-group sh-inner sh-book__in"><!-- wp:heading {"level":2,"className":"sh-prose__h"} -->
<h2 class="wp-block-heading sh-prose__h"><?php echo wp_kses_post( shizuka_hearing_t( 'kc6fbcee5' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuka_hearing_t( 'kc48eef8f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="sh-form" action="mailto:hello@shizuka-hearing.example" method="post" enctype="text/plain"><p><label for="sh-n"><?php echo wp_kses_post( shizuka_hearing_t( 'k49ee3087' ) ); ?></label><input id="sh-n" name="name" type="text" required></p><p><label for="sh-e"><?php echo wp_kses_post( shizuka_hearing_t( 'kce8ae9da' ) ); ?></label><input id="sh-e" name="email" type="email" required></p><p><label for="sh-d"><?php echo wp_kses_post( shizuka_hearing_t( 'kc4088d33' ) ); ?></label><input id="sh-d" name="day" type="text"></p><p><label for="sh-m"><?php echo wp_kses_post( shizuka_hearing_t( 'k4c2a8fe7' ) ); ?></label><textarea id="sh-m" name="message" rows="5"></textarea></p><p><button type="submit" class="sh-formbtn"><?php echo wp_kses_post( shizuka_hearing_t( 'kf68db52c' ) ); ?></button></p></form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
