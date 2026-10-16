<?php
/**
 * Title: The tea house: story, confectioner and house
 * Slug: kanmi-dokoro/about-main
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Description: The story of the tea house beside the confectioner, a wide watercolour of the front and what is in the house.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-section kd-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kd-section kd-about"><!-- wp:group {"align": "wide", "className": "kd-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kd-about__story"><!-- wp:group {"className": "kd-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( kanmi_dokoro_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kanmi_dokoro_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-about__img"} -->
<figure class="wp-block-image size-full kd-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/confectioner.webp' ) ); ?>" alt="<?php echo esc_attr( kanmi_dokoro_t( 'alt_window' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "kd-about__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kd-about__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-about__wide"} -->
<figure class="wp-block-image size-full kd-about__wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shop-front.webp' ) ); ?>" alt="<?php echo esc_attr( kanmi_dokoro_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kd-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-rules"><!-- wp:heading {"className": "kd-sec__title"} -->
<h2 class="wp-block-heading kd-sec__title"><?php echo esc_html( kanmi_dokoro_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "kd-rules__list"} -->
<ol class="wp-block-list kd-rules__list"><!-- wp:list-item -->
<li><?php echo esc_html( kanmi_dokoro_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( kanmi_dokoro_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( kanmi_dokoro_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( kanmi_dokoro_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
