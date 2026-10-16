<?php
/**
 * Title: The office: story, adviser and house
 * Slug: soroban-kaikei/about-main
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Description: The story of the office beside the adviser, a wide flat illustration of the front and what is in the house.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-section sk-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-section sk-about"><!-- wp:group {"align": "wide", "className": "sk-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sk-about__story"><!-- wp:group {"className": "sk-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-about__text"><!-- wp:paragraph {"className": "is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html( soroban_kaikei_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( soroban_kaikei_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-about__img"} -->
<figure class="wp-block-image size-full sk-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/advisor.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_window' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "sk-about__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sk-about__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-about__wide"} -->
<figure class="wp-block-image size-full sk-about__wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office-door.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sk-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-rules"><!-- wp:heading {"className": "sk-sec__title"} -->
<h2 class="wp-block-heading sk-sec__title"><?php echo esc_html( soroban_kaikei_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered": true, "className": "sk-rules__list"} -->
<ol class="wp-block-list sk-rules__list"><!-- wp:list-item -->
<li><?php echo esc_html( soroban_kaikei_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soroban_kaikei_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soroban_kaikei_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( soroban_kaikei_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
