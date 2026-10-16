<?php
/**
 * Title: The meadow: story, map and house rules
 * Slug: hoshizora-camp/about-main
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: The story of the meadow beside the silver-grass trail, the numbered site map and the house rules.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-section hz-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-about"><!-- wp:group {"align": "wide", "className": "hz-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hz-about__story"><!-- wp:group {"className": "hz-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( hoshizora_camp_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-about__img"} -->
<figure class="wp-block-image size-full hz-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/trail.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_trail' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "hz-about__map", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hz-about__map"><!-- wp:pattern {"slug":"hoshizora-camp/site-map"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hz-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-rules"><!-- wp:heading {"className": "hz-sec__title"} -->
<h2 class="wp-block-heading hz-sec__title"><?php echo esc_html( hoshizora_camp_t( 'rules' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "hz-rules__list"} -->
<ol class="wp-block-list hz-rules__list"><!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'rule1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'rule2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'rule3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( hoshizora_camp_t( 'rule4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
