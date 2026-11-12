<?php
/**
 * Title: Page: Sites
 * Slug: meguri-waste/page-sites
 * Categories: meguri-waste
 * Description: Inner page: lead band and three case-note rows, each with a small three-pictogram strip.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-wash mw-wash--lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-wash mw-wash--lead"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-wash__pic"} -->
<figure class="wp-block-image size-full mw-wash__pic"><img src="<?php echo meguri_waste_img( 'p05' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p05' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:group {"className":"mw-wash__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wash__text"><!-- wp:heading {"level":1,"className":"mw-h1"} -->
<h1 class="wp-block-heading mw-h1"><?php echo esc_html( meguri_waste_t( 'sn_t' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:separator {"className":"mw-hairline is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide mw-hairline"/>
<!-- /wp:separator --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'sn_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-sites","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-sites"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'sn_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:group {"className":"mw-case sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case sp-reveal sp-reveal--down"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-case__pic"} -->
<figure class="wp-block-image size-full mw-case__pic"><img src="<?php echo meguri_waste_img( 'p08' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p08' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mw-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case__text"><!-- wp:paragraph {"className":"mw-case__meta"} -->
<p class="mw-case__meta"><span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'sites_tag' ) ); ?></span> <span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'si1_tag' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'sn1_h' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'sn1_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<div class="mw-mini3" aria-hidden="true"><span class="mw-mini3__ico"><?php echo meguri_waste_icon( 'general' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span><span class="mw-mini3__arr"></span><span class="mw-mini3__ico"><?php echo meguri_waste_icon( 'recycling' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span><span class="mw-mini3__arr"></span><span class="mw-mini3__ico"><?php echo meguri_waste_icon( 'glass' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-case sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case sp-reveal sp-reveal--down"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-case__pic"} -->
<figure class="wp-block-image size-full mw-case__pic"><img src="<?php echo meguri_waste_img( 'p09' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p09' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mw-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case__text"><!-- wp:paragraph {"className":"mw-case__meta"} -->
<p class="mw-case__meta"><span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'sites_tag' ) ); ?></span> <span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'si2_tag' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'sn2_h' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'sn2_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<div class="mw-mini3" aria-hidden="true"><span class="mw-mini3__ico"><?php echo meguri_waste_icon( 'food' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span><span class="mw-mini3__arr"></span><span class="mw-mini3__ico"><?php echo meguri_waste_icon( 'truck' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span><span class="mw-mini3__arr"></span><span class="mw-mini3__ico"><?php echo meguri_waste_icon( 'report' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"mw-case sp-reveal sp-reveal--down","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case sp-reveal sp-reveal--down"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mw-case__pic"} -->
<figure class="wp-block-image size-full mw-case__pic"><img src="<?php echo meguri_waste_img( 'p15' ); ?>" alt="<?php echo esc_attr( meguri_waste_t( 'alt_p15' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:group {"className":"mw-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case__text"><!-- wp:paragraph {"className":"mw-case__meta"} -->
<p class="mw-case__meta"><span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'sites_tag' ) ); ?></span> <span class="mw-tagchip"><?php echo esc_html( meguri_waste_t( 'si3_tag' ) ); ?></span></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":3,"className":"mw-h3"} -->
<h3 class="wp-block-heading mw-h3"><?php echo esc_html( meguri_waste_t( 'sn3_h' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( meguri_waste_t( 'sn3_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:html -->
<div class="mw-mini3" aria-hidden="true"><span class="mw-mini3__ico"><?php echo meguri_waste_icon( 'confidential' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span><span class="mw-mini3__arr"></span><span class="mw-mini3__ico"><?php echo meguri_waste_icon( 'glass' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span><span class="mw-mini3__arr"></span><span class="mw-mini3__ico"><?php echo meguri_waste_icon( 'weigh' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mw-sec mw-sec--paper","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mw-sec mw-sec--paper"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:heading {"level":2,"className":"mw-h2 sp-reveal sp-reveal--down"} -->
<h2 class="wp-block-heading mw-h2 sp-reveal sp-reveal--down"><?php echo esc_html( meguri_waste_t( 'sn_hq' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mw-prose"} -->
<p class="mw-prose"><?php echo esc_html( meguri_waste_t( 'sn_pq' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mw-btn"} -->
<div class="wp-block-button mw-btn"><a class="wp-block-button__link wp-element-button" href="/set-your-schedule/"><?php echo esc_html( meguri_waste_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
