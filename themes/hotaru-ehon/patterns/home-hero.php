<?php
/**
 * Title: Home: poster title over the firefly map
 * Slug: hotaru-ehon/home-hero
 * Categories: hotaru-ehon
 * Keywords: picture book, illustration, illustrator
 * Viewport Width: 1440
 * Description: A poster on the imayo field: the issue line and the title in giant type across the width, the lead and buttons on the left, and on the right the picture-book map of the riverside village in a cream frame that overlaps the title, with three firefly pins (the places where books began). The cut-out firefly jar breaks out of the frame over its top edge and into the giant title.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull ht-hero"><!-- wp:group {"className": "ht-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-hero__text"><!-- wp:paragraph {"className": "ht-issue"} -->
<p class="ht-issue"><?php echo esc_html( hotaru_ehon_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ht-eyebrow"} -->
<p class="ht-eyebrow"><?php echo esc_html( hotaru_ehon_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ht-hero__title"} -->
<h1 class="wp-block-heading ht-hero__title"><?php echo esc_html( hotaru_ehon_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ht-hero__lead"} -->
<p class="ht-hero__lead"><?php echo esc_html( hotaru_ehon_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "ht-hero__cta"} -->
<div class="wp-block-buttons ht-hero__cta"><!-- wp:button {"className": "ht-book"} -->
<div class="wp-block-button ht-book"><a class="wp-block-button__link wp-element-button" href="/commissions/"><?php echo esc_html( hotaru_ehon_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/books/"><?php echo esc_html( hotaru_ehon_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className": "ht-hero__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-hero__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-hero__window"} -->
<figure class="wp-block-image size-full ht-hero__window"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-map.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-hero__chair"} -->
<figure class="wp-block-image size-full ht-hero__chair"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/jar-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ht-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-toc"><!-- wp:paragraph {"className": "ht-toc__label"} -->
<p class="ht-toc__label"><?php echo esc_html( hotaru_ehon_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "ht-toc__list"} -->
<ol class="wp-block-list ht-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hotaru_ehon_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->



<?php if ( '' !== hotaru_ehon_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "ht-tate"} -->
<p class="ht-tate"><?php echo esc_html( hotaru_ehon_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
