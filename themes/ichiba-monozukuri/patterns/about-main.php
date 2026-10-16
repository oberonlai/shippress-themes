<?php
/**
 * Title: The market: story, print and manners
 * Slug: ichiba-monozukuri/about-main
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: The story of the market beside a still life of sticks, a wide framed print and the market manners.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-section im-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-section im-about"><!-- wp:group {"align": "wide", "className": "im-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide im-about__story"><!-- wp:group {"className": "im-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group im-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( ichiba_monozukuri_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( ichiba_monozukuri_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-about__img"} -->
<figure class="wp-block-image size-full im-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/indigo.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_indigo' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "im-about__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide im-about__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-about__wide"} -->
<figure class="wp-block-image size-full im-about__wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/market.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_trail' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "im-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group im-rules"><!-- wp:heading {"className": "im-sec__title"} -->
<h2 class="wp-block-heading im-sec__title"><?php echo esc_html( ichiba_monozukuri_t( 'rules' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "im-rules__list"} -->
<ol class="wp-block-list im-rules__list"><!-- wp:list-item -->
<li><?php echo esc_html( ichiba_monozukuri_t( 'rule1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( ichiba_monozukuri_t( 'rule2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( ichiba_monozukuri_t( 'rule3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( ichiba_monozukuri_t( 'rule4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
