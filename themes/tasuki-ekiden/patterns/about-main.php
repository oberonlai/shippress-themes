<?php
/**
 * Title: About the race: story and race day
 * Slug: tasuki-ekiden/about-main
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The story of the race beside the team painting, a wide painting of the finish and what is ready on the day.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "te-section te-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull te-section te-about"><!-- wp:group {"align": "wide", "className": "te-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide te-about__story"><!-- wp:group {"className": "te-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group te-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( tasuki_ekiden_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tasuki_ekiden_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-about__img"} -->
<figure class="wp-block-image size-full te-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/team.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_window' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "te-about__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide te-about__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-about__wide"} -->
<figure class="wp-block-image size-full te-about__wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/finish.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "te-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group te-rules"><!-- wp:heading {"className": "te-sec__title"} -->
<h2 class="wp-block-heading te-sec__title"><?php echo esc_html( tasuki_ekiden_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "te-rules__list"} -->
<ol class="wp-block-list te-rules__list"><!-- wp:list-item -->
<li><?php echo esc_html( tasuki_ekiden_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( tasuki_ekiden_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( tasuki_ekiden_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( tasuki_ekiden_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
