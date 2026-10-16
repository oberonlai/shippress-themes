<?php
/**
 * Title: The studio: story, desk and tools
 * Slug: koma-manga/about-main
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Description: The story of the studio beside the artist at the window, a wide framed desk panel and the tools on the desk.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-section km-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-section km-about"><!-- wp:group {"align": "wide", "className": "km-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide km-about__story"><!-- wp:group {"className": "km-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group km-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( koma_manga_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( koma_manga_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-about__img"} -->
<figure class="wp-block-image size-full km-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/artist-window.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_window' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "km-about__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide km-about__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-about__wide"} -->
<figure class="wp-block-image size-full km-about__wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group km-rules"><!-- wp:heading {"className": "km-sec__title"} -->
<h2 class="wp-block-heading km-sec__title"><?php echo esc_html( koma_manga_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "km-rules__list"} -->
<ol class="wp-block-list km-rules__list"><!-- wp:list-item -->
<li><?php echo esc_html( koma_manga_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( koma_manga_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( koma_manga_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( koma_manga_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
