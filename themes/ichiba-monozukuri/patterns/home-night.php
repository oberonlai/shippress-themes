<?php
/**
 * Title: Home: one market day
 * Slug: ichiba-monozukuri/home-night
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: The night-indigo band: indigo cloths drying beside the class timeline; a cut-out bowl and spoon breaks over the band's top edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-section im-night", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-section im-night"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-night__cut"} -->
<figure class="wp-block-image size-full im-night__cut"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/maker-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"align": "wide", "className": "im-night__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide im-night__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-night__img"} -->
<figure class="wp-block-image size-full im-night__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/indigo.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_indigo' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "im-night__text", "layout": {"type": "default"}} -->
<div class="wp-block-group im-night__text"><!-- wp:paragraph {"className": "im-eyebrow"} -->
<p class="im-eyebrow"><?php echo esc_html( ichiba_monozukuri_t( 'night_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "im-sec__title"} -->
<h2 class="wp-block-heading im-sec__title"><?php echo esc_html( ichiba_monozukuri_t( 'night_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "im-times"} -->
<ul class="wp-block-list im-times"><!-- wp:list-item -->
<li><strong>7:00</strong> <?php echo esc_html( ichiba_monozukuri_t( 'n1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>9:00</strong> <?php echo esc_html( ichiba_monozukuri_t( 'n2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>11:00</strong> <?php echo esc_html( ichiba_monozukuri_t( 'n3' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>15:00</strong> <?php echo esc_html( ichiba_monozukuri_t( 'n4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
