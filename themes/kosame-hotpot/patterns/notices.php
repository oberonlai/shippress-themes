<?php
/**
 * Title: Home: latest journal posts
 * Slug: kosame-hotpot/notices
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Description: Three latest posts as plain text rows (date above, title below) and a corner-bracket button.
 */
?>
<!-- wp:group {"anchor":"notices","tagName":"section","className":"ks-sec","layout":{"type":"default"}} -->
<section id="notices" class="wp-block-group ks-sec"><!-- wp:group {"className":"ks-vhead sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead sp-stagger"><!-- wp:paragraph {"className":"ks-vhead__label sp-reveal sp-reveal--up"} -->
<p class="ks-vhead__label sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'vh_notices_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-vhead__rule sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__rule sp-reveal sp-reveal--wipe"><!-- wp:group {"className":"ks-vhead__line","layout":{"type":"default"}} -->
<div class="wp-block-group ks-vhead__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":2,"className":"ks-vhead__title sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ks-vhead__title sp-reveal sp-reveal--up"><?php echo esc_html( kosame_hotpot_t( 'vh_notices' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-sec__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sec__body sp-stagger"><!-- wp:group {"className":"ks-notices-wrap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ks-notices-wrap sp-reveal sp-reveal--up"><!-- wp:group {"className":"ks-rule sp-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rule sp-reveal"></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ks-notices"} -->
<div class="wp-block-query ks-notices"><!-- wp:post-template -->
<!-- wp:post-date {"format":"Y.m.d","className":"ks-notice__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ks-notice__title"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ks-more-wrap sp-reveal sp-reveal--up"} -->
<div class="wp-block-buttons ks-more-wrap sp-reveal sp-reveal--up"><!-- wp:button {"className":"ks-more"} -->
<div class="wp-block-button ks-more"><a class="wp-block-button__link wp-element-button" href="<?php echo kosame_hotpot_url( '/journal/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'more_notices' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
