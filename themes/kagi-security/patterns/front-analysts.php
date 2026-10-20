<?php
/**
 * Title: Home: the analysts by name
 * Slug: kagi-security/front-analysts
 * Categories: kagi-security
 * Keywords: analysts, people, team
 * Viewport Width: 1440
 * Description: A large portrait of the head of the night desk with label chips, beside two paragraphs and two smaller analysts with quotes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-analysts","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-analysts"><!-- wp:group {"className":"ks-analysts__grid","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-analysts__grid"><!-- wp:group {"className":"ks-analysts__lead","layout":{"type":"default"}} -->
<div class="wp-block-group ks-analysts__lead"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-analysts__big"} -->
<figure class="wp-block-image size-full ks-analysts__big"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/analyst-1.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_an_img1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-analysts__caption","layout":{"type":"default"}} -->
<div class="wp-block-group ks-analysts__caption"><!-- wp:paragraph {"className":"ks-chip"} -->
<p class="ks-chip"><?php echo wp_kses_post( kagi_security_t( 'front_an_chip' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chip ks-chip--off"} -->
<p class="ks-chip ks-chip--off"><?php echo wp_kses_post( kagi_security_t( 'front_an_name1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-analysts__side","layout":{"type":"default"}} -->
<div class="wp-block-group ks-analysts__side"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'front_an_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_an_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_an_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_an_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-analyst","layout":{"type":"default"}} -->
<div class="wp-block-group ks-analyst"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-analyst__photo"} -->
<figure class="wp-block-image size-full ks-analyst__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/analyst-2.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_an_img2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-analyst__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-analyst__text"><!-- wp:heading {"level":3,"className":"ks-analyst__name"} -->
<h3 class="wp-block-heading ks-analyst__name"><?php echo wp_kses_post( kagi_security_t( 'front_an_name2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-analyst__role"} -->
<p class="ks-analyst__role"><?php echo wp_kses_post( kagi_security_t( 'front_an_role2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-analyst__quote"} -->
<p class="ks-analyst__quote"><?php echo wp_kses_post( kagi_security_t( 'front_an_q2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-analyst","layout":{"type":"default"}} -->
<div class="wp-block-group ks-analyst"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-analyst__photo"} -->
<figure class="wp-block-image size-full ks-analyst__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/analyst-3.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_an_img3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-analyst__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-analyst__text"><!-- wp:heading {"level":3,"className":"ks-analyst__name"} -->
<h3 class="wp-block-heading ks-analyst__name"><?php echo wp_kses_post( kagi_security_t( 'front_an_name3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-analyst__role"} -->
<p class="ks-analyst__role"><?php echo wp_kses_post( kagi_security_t( 'front_an_role3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-analyst__quote"} -->
<p class="ks-analyst__quote"><?php echo wp_kses_post( kagi_security_t( 'front_an_q3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/analysts/"><?php echo wp_kses_post( kagi_security_t( 'front_an_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
