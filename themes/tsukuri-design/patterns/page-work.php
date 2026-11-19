<?php
/**
 * Title: Page: Work
 * Slug: tsukuri-design/page-work
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Strip, four case blocks each with a caption row and a twin photograph pair.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-strip td-strip--photo","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-strip td-strip--photo"><!-- wp:group {"className":"td-strip__txt","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__txt"><!-- wp:heading {"level":1,"className":"td-strip__h"} -->
<h1 class="wp-block-heading td-strip__h"><?php echo esc_html( tsukuri_design_t( 'nav_work' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-role"} -->
<p class="td-role"><?php echo esc_html( tsukuri_design_t( 'wk_desc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-strip__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p02-handset-row.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--tight"><!-- wp:paragraph {"className":"td-lede"} -->
<p class="td-lede"><?php echo esc_html( tsukuri_design_t( 'wk_lede' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--paper","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--paper"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'wk_l_a' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'a_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-cap__kind"} -->
<p class="td-cap__kind"><?php echo esc_html( tsukuri_design_t( 'a_kind' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-cap__cat"} -->
<p class="td-cap__cat"><?php echo esc_html( tsukuri_design_t( 'a_year' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'wk_h0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'wk_p0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-pair sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair sp-stagger"><!-- wp:group {"className":"td-pair__i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair__i sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-micro"} -->
<p class="td-micro"><?php echo esc_html( tsukuri_design_t( 'pa_before' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p06-case-a-before.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-capline"} -->
<p class="td-capline"><?php echo esc_html( tsukuri_design_t( 'pa_cap1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-pair__i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair__i sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-micro"} -->
<p class="td-micro"><?php echo esc_html( tsukuri_design_t( 'pa_after' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p07-case-a-after.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-capline"} -->
<p class="td-capline"><?php echo esc_html( tsukuri_design_t( 'pa_cap2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-facts td-facts--c"} -->
<p class="td-facts td-facts--c"><?php echo esc_html( tsukuri_design_t( 'pa_facts' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-more"} -->
<p class="td-more"><a href="<?php echo esc_url( home_url( '/forty-one-handsets-in-the-dark/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'read_note' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'wk_l_b' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'b_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-cap__kind"} -->
<p class="td-cap__kind"><?php echo esc_html( tsukuri_design_t( 'b_kind' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-cap__cat"} -->
<p class="td-cap__cat"><?php echo esc_html( tsukuri_design_t( 'b_year' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'wk_h1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'wk_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-pair sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair sp-stagger"><!-- wp:group {"className":"td-pair__i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair__i sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-micro"} -->
<p class="td-micro"><?php echo esc_html( tsukuri_design_t( 'pb_before' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p08-case-b-before.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-capline"} -->
<p class="td-capline"><?php echo esc_html( tsukuri_design_t( 'pb_cap1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-pair__i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair__i sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-micro"} -->
<p class="td-micro"><?php echo esc_html( tsukuri_design_t( 'pb_after' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p09-case-b-after.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-capline"} -->
<p class="td-capline"><?php echo esc_html( tsukuri_design_t( 'pb_cap2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-facts td-facts--c"} -->
<p class="td-facts td-facts--c"><?php echo esc_html( tsukuri_design_t( 'pb_facts' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-more"} -->
<p class="td-more"><a href="<?php echo esc_url( home_url( '/a-kettle-you-can-open-with-a-wet-hand/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'read_note' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--paper","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--paper"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'wk_l_c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'c_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-cap__kind"} -->
<p class="td-cap__kind"><?php echo esc_html( tsukuri_design_t( 'c_kind' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-cap__cat"} -->
<p class="td-cap__cat"><?php echo esc_html( tsukuri_design_t( 'c_year' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'wk_h2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'wk_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-pair sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair sp-stagger"><!-- wp:group {"className":"td-pair__i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair__i sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-micro"} -->
<p class="td-micro"><?php echo esc_html( tsukuri_design_t( 'wk_c_before' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p16-pen-parts.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-capline"} -->
<p class="td-capline"><?php echo esc_html( tsukuri_design_t( 'wk_c_cap1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-pair__i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair__i sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-micro"} -->
<p class="td-micro"><?php echo esc_html( tsukuri_design_t( 'wk_c_after' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p10-dose-pen.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-capline"} -->
<p class="td-capline"><?php echo esc_html( tsukuri_design_t( 'wk_c_cap2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-facts td-facts--c"} -->
<p class="td-facts td-facts--c"><?php echo esc_html( tsukuri_design_t( 'wk_c_facts' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'wk_l_d' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'd_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-cap__kind"} -->
<p class="td-cap__kind"><?php echo esc_html( tsukuri_design_t( 'd_kind' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-cap__cat"} -->
<p class="td-cap__cat"><?php echo esc_html( tsukuri_design_t( 'd_year' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'wk_h3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'wk_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-pair sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair sp-stagger"><!-- wp:group {"className":"td-pair__i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair__i sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-micro"} -->
<p class="td-micro"><?php echo esc_html( tsukuri_design_t( 'wk_d_before' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p11-speaker.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-capline"} -->
<p class="td-capline"><?php echo esc_html( tsukuri_design_t( 'wk_d_cap1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-pair__i sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-pair__i sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"td-micro"} -->
<p class="td-micro"><?php echo esc_html( tsukuri_design_t( 'wk_d_after' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p15-first-off.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-capline"} -->
<p class="td-capline"><?php echo esc_html( tsukuri_design_t( 'wk_d_cap2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-facts td-facts--c"} -->
<p class="td-facts td-facts--c"><?php echo esc_html( tsukuri_design_t( 'wk_d_facts' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--tight"><!-- wp:paragraph {"className":"td-more"} -->
<p class="td-more"><a href="<?php echo esc_url( home_url( '/start/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'start_link' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
