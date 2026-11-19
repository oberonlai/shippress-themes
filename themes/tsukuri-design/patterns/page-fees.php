<?php
/**
 * Title: Page: Fees
 * Slug: tsukuri-design/page-fees
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Fee table that stays full width on desktop and stacks on mobile, with the pricing notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-strip td-strip--photo","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-strip td-strip--photo"><!-- wp:group {"className":"td-strip__txt","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__txt"><!-- wp:heading {"level":1,"className":"td-strip__h"} -->
<h1 class="wp-block-heading td-strip__h"><?php echo esc_html( tsukuri_design_t( 'nav_fees' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-role"} -->
<p class="td-role"><?php echo esc_html( tsukuri_design_t( 'fe_desc' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-strip__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group td-strip__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p06-case-a-before.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--tight"><!-- wp:paragraph {"className":"td-lede"} -->
<p class="td-lede"><?php echo esc_html( tsukuri_design_t( 'fe_lede' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec td-sec--paper","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec td-sec--paper"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'fe_l0' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:table {"hasFixedLayout":false,"className":"td-fees"} -->
<figure class="wp-block-table td-fees"><table><thead><tr><th><?php echo esc_html( tsukuri_design_t( 'fe_th1' ) ); ?></th><th><?php echo esc_html( tsukuri_design_t( 'fe_th2' ) ); ?></th><th><?php echo esc_html( tsukuri_design_t( 'fe_th3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( tsukuri_design_t( 'fe_i1_n' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i1_t' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( tsukuri_design_t( 'fe_i2_n' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i2_t' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( tsukuri_design_t( 'fe_i3_n' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i3_t' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( tsukuri_design_t( 'fe_i4_n' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i4_t' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( tsukuri_design_t( 'fe_i5_n' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i5_t' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( tsukuri_design_t( 'fe_i6_n' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i6_t' ) ); ?></td><td><?php echo esc_html( tsukuri_design_t( 'fe_i6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"td-fees__note"} -->
<p class="td-fees__note"><?php echo esc_html( tsukuri_design_t( 'fe_note1' ) ); ?><br><?php echo esc_html( tsukuri_design_t( 'fe_note2' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"td-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-sec"><!-- wp:group {"className":"td-open","layout":{"type":"default"}} -->
<div class="wp-block-group td-open"><!-- wp:heading {"level":2,"className":"td-label"} -->
<h2 class="wp-block-heading td-label"><?php echo esc_html( tsukuri_design_t( 'fe_l1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"td-hair"} -->
<hr class="wp-block-separator has-alpha-channel-opacity td-hair"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'fe_n1' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'fe_h0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'fe_p0' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap sp-reveal sp-reveal--up"><!-- wp:group {"className":"td-cap__l","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__l"><!-- wp:heading {"level":3,"className":"td-cap__name"} -->
<h3 class="wp-block-heading td-cap__name"><?php echo esc_html( tsukuri_design_t( 'fe_n2' ) ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-cap__r","layout":{"type":"default"}} -->
<div class="wp-block-group td-cap__r"><!-- wp:heading {"level":3,"className":"td-cap__h"} -->
<h3 class="wp-block-heading td-cap__h"><?php echo esc_html( tsukuri_design_t( 'fe_h2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsukuri_design_t( 'fe_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"td-more"} -->
<p class="td-more"><a href="<?php echo esc_url( home_url( '/start/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'start_link' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
