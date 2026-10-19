<?php
/**
 * Title: About: page head
 * Slug: tanba-law/about-head
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Description: An old-purple page head: the eyebrow, title and lead beside a framed photo; a cut-out portrait breaks over its bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tb-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tb-pagehead"><!-- wp:paragraph {"className": "tb-eyebrow"} -->
<p class="tb-eyebrow"><?php echo esc_html( tanba_law_t( 'about_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tb-pagehead__title"} -->
<h1 class="wp-block-heading tb-pagehead__title"><?php echo esc_html( tanba_law_t( 'about_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tb-pagehead__lead"} -->
<p class="tb-pagehead__lead"><?php echo esc_html( tanba_law_t( 'about_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tb-piece tb-pagehead__img"} -->
<figure class="wp-block-image size-full tb-piece tb-pagehead__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( tanba_law_t( 'alt_meeting' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tb-pagehead__branch"} -->
<figure class="wp-block-image size-full tb-pagehead__branch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/partner-a-cutout.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<?php if ( '' !== tanba_law_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "tb-tate"} -->
<p class="tb-tate"><?php echo esc_html( tanba_law_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
