<?php
/**
 * Title: The teacher: her story
 * Slug: fukusa-chado/about-main
 * Categories: fukusa-chado
 * Keywords: tea ceremony, matcha, lessons
 * Viewport Width: 1440
 * Description: The teacher’s story in two columns beside a picture card, a wide picture of the tea room and what to bring.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-section fc-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-section fc-about"><!-- wp:group {"align": "wide", "className": "fc-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide fc-about__story"><!-- wp:group {"className": "fc-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-about__text"><!-- wp:paragraph {"className": "fc-dropcap"} -->
<p class="fc-dropcap"><?php echo esc_html( fukusa_chado_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( fukusa_chado_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-piece fc-about__img"} -->
<figure class="wp-block-image size-full fc-piece fc-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flower.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-about__wide alignwide"} -->
<figure class="wp-block-image size-full fc-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/seasons.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "fc-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-rules"><!-- wp:heading {"className": "fc-sec__title"} -->
<h2 class="wp-block-heading fc-sec__title"><?php echo esc_html( fukusa_chado_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( fukusa_chado_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( fukusa_chado_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( fukusa_chado_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( fukusa_chado_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
