<?php
/**
 * Title: Page: Newsletter
 * Slug: homura-safety/page-newsletter
 * Categories: homura-safety
 * Viewport Width: 1440
 * Description: Newsletter waitlist page: slanted word NEWS, what the monthly brief covers and a standalone email signup (plugin form or mailto fallback).
 */
?>
<!-- wp:cover {"url":"<?php echo homura_safety_img( 'hs-15-notebook' ); ?>","dimRatio":40,"minHeight":320,"minHeightUnit":"px","align":"full","className":"hs-pagehead hs-pagehead--photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull hs-pagehead hs-pagehead--photo sp-parallax" style="min-height:320px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( homura_safety_t( 'alt_15' ) ); ?>" src="<?php echo homura_safety_img( 'hs-15-notebook' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"hs-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-pagehead__in"><!-- wp:paragraph {"className":"hs-barword hs-barword--page"} -->
<p class="hs-barword hs-barword--page" aria-hidden="true"><?php echo esc_html( homura_safety_t( 'pw_newsletter' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hs-pagehead__title"} -->
<h1 class="wp-block-heading hs-pagehead__title"><?php echo esc_html( homura_safety_t( 'newsletter_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec"><!-- wp:group {"align":"wide","className":"hs-leadwrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-leadwrap"><!-- wp:paragraph {"className":"hs-lead"} -->
<p class="hs-lead"><?php echo esc_html( homura_safety_t( 'newsletter_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hs-contact__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-contact__grid"><!-- wp:group {"className":"hs-contact__text","layout":{"type":"default"}} -->
<div class="wp-block-group hs-contact__text"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'newsletter_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_brief' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'newsletter_b1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'newsletter_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_topics' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'newsletter_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'newsletter_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'sb_data' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'newsletter_b3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-contact__panel hs-contact__panel--news","layout":{"type":"default"}} -->
<div class="wp-block-group hs-contact__panel hs-contact__panel--news"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'nl_form_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"homura-safety/news-slot"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
