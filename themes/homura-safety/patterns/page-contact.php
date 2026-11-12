<?php
/**
 * Title: Page: Contact
 * Slug: homura-safety/page-contact
 * Categories: homura-safety
 * Viewport Width: 1440
 * Description: Contact and booking: slanted word CALL, address and hours, and the contact form slot with a mailto fallback.
 */
?>
<!-- wp:cover {"url":"<?php echo homura_safety_img( 'hs-17-evening-door' ); ?>","dimRatio":40,"minHeight":320,"minHeightUnit":"px","align":"full","className":"hs-pagehead hs-pagehead--photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull hs-pagehead hs-pagehead--photo sp-parallax" style="min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( homura_safety_t( 'alt_17' ) ); ?>" src="<?php echo homura_safety_img( 'hs-17-evening-door' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"hs-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-pagehead__in"><!-- wp:paragraph {"className":"hs-barword hs-barword--page"} -->
<p class="hs-barword hs-barword--page" aria-hidden="true"><?php echo esc_html( homura_safety_t( 'pw_contact' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hs-pagehead__title"} -->
<h1 class="wp-block-heading hs-pagehead__title"><?php echo esc_html( homura_safety_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec"><!-- wp:group {"align":"wide","className":"hs-leadwrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-leadwrap"><!-- wp:paragraph {"className":"hs-lead"} -->
<p class="hs-lead"><?php echo esc_html( homura_safety_t( 'contact_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hs-contact__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-contact__grid"><!-- wp:group {"className":"hs-contact__text","layout":{"type":"default"}} -->
<div class="wp-block-group hs-contact__text"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'contact_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_visit' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'contact_b1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'contact_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_reach' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'contact_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'contact_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_call' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'contact_b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-contact__panel","layout":{"type":"default"}} -->
<div class="wp-block-group hs-contact__panel"><!-- wp:group {"className":"hs-book__facts hs-contact__facts","layout":{"type":"default"}} -->
<div class="wp-block-group hs-book__facts hs-contact__facts"><!-- wp:paragraph -->
<p><strong><?php echo esc_html( homura_safety_t( 'bk_l1' ) ); ?></strong><br><?php echo esc_html( homura_safety_t( 'ft_address' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html( homura_safety_t( 'bk_l2' ) ); ?></strong><br><?php echo esc_html( homura_safety_t( 'bk_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html( homura_safety_t( 'bk_l3' ) ); ?></strong><br>+00 21 4460 2011</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html( homura_safety_t( 'bk_l4' ) ); ?></strong><br><a href="mailto:hello@homura-safety.example"><?php echo wp_kses_post( homura_safety_t( 'kfbdd61ce' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"homura-safety/contact-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
