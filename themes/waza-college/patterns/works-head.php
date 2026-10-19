<?php
/**
 * Title: Services: page head
 * Slug: waza-college/works-head
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Description: A rust-asagi page head: the eyebrow, title and lead beside a framed photo; the cut-out hard hat breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "wz-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull wz-pagehead"><!-- wp:paragraph {"className": "wz-eyebrow"} -->
<p class="wz-eyebrow"><?php echo esc_html( waza_college_t( 'h_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "wz-pagehead__title"} -->
<h1 class="wp-block-heading wz-pagehead__title"><?php echo esc_html( waza_college_t( 'h_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "wz-pagehead__lead"} -->
<p class="wz-pagehead__lead"><?php echo esc_html( waza_college_t( 'h_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "wz-piece wz-pagehead__img"} -->
<figure class="wp-block-image size-full wz-piece wz-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bench.webp' ) ); ?>" alt="<?php echo esc_attr( waza_college_t( 'alt_bench' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "wz-pagehead__branch"} -->
<figure class="wp-block-image size-full wz-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/helmet-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== waza_college_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "wz-tate"} -->
<p class="wz-tate"><?php echo esc_html( waza_college_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
