<?php
/**
 * Title: Home: text left, art right on a hanada field
 * Slug: mamori-hoken/home-hero
 * Categories: mamori-hoken
 * Keywords: insurance, agency, advice
 * Viewport Width: 1440
 * Description: Text left, art right: the hanada field with a faint linen texture holds the issue line, title, lead, buttons and this month's questions on the left; the photo of a family on a sofa is framed on the right, and the cut-out document folder breaks out over the frame and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull mh-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-hero__banner"} -->
<figure class="wp-block-image size-full mh-hero__banner"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-life.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_life' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mh-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-hero__text"><!-- wp:paragraph {"className": "mh-issue"} -->
<p class="mh-issue"><?php echo esc_html( mamori_hoken_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mh-eyebrow"} -->
<p class="mh-eyebrow"><?php echo esc_html( mamori_hoken_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mh-hero__title"} -->
<h1 class="wp-block-heading mh-hero__title"><?php echo esc_html( mamori_hoken_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mh-hero__lead"} -->
<p class="mh-hero__lead"><?php echo esc_html( mamori_hoken_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mh-hero__cta"} -->
<div class="wp-block-buttons mh-hero__cta"><!-- wp:button {"className": "mh-book"} -->
<div class="wp-block-button mh-book"><a class="wp-block-button__link wp-element-button" href="/consult/"><?php echo esc_html( mamori_hoken_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/cover/"><?php echo esc_html( mamori_hoken_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "mh-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-toc"><!-- wp:paragraph {"className": "mh-toc__label"} -->
<p class="mh-toc__label"><?php echo esc_html( mamori_hoken_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "mh-toc__list"} -->
<ol class="wp-block-list mh-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( mamori_hoken_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-hero__bowl"} -->
<figure class="wp-block-image size-full mh-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/folder-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== mamori_hoken_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "mh-tate"} -->
<p class="mh-tate"><?php echo esc_html( mamori_hoken_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
