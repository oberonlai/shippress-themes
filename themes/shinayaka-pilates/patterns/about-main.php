<?php
/**
 * Title: The studio: story, teacher and room
 * Slug: shinayaka-pilates/about-main
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Description: The story of the studio beside the teacher, a wide street picture and what is in the room.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-section sp-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sp-section sp-about"><!-- wp:group {"align": "wide", "className": "sp-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sp-about__story"><!-- wp:group {"className": "sp-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( shinayaka_pilates_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shinayaka_pilates_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-about__img"} -->
<figure class="wp-block-image size-full sp-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher.webp' ) ); ?>" alt="<?php echo esc_attr( shinayaka_pilates_t( 'alt_window' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "sp-about__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sp-about__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sp-about__wide"} -->
<figure class="wp-block-image size-full sp-about__wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio-door.webp' ) ); ?>" alt="<?php echo esc_attr( shinayaka_pilates_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sp-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-rules"><!-- wp:heading {"className": "sp-sec__title"} -->
<h2 class="wp-block-heading sp-sec__title"><?php echo esc_html( shinayaka_pilates_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "sp-rules__list"} -->
<ol class="wp-block-list sp-rules__list"><!-- wp:list-item -->
<li><?php echo esc_html( shinayaka_pilates_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( shinayaka_pilates_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( shinayaka_pilates_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( shinayaka_pilates_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
