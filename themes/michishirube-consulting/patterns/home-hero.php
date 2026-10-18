<?php
/**
 * Title: Home: a cut-out object breaking its frame on a navy field
 * Slug: michishirube-consulting/home-hero
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Description: A cut-out object breaking its frame: the deep navy field holds the issue line, title, lead, buttons and this month's questions on the left; the low-key photo of an empty boardroom is framed on the right, and the cut-out consultant breaks out over the frame and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull mc-hero"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-hero__banner"} -->
<figure class="wp-block-image size-full mc-hero__banner"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/boardroom.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_life' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mc-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-hero__text"><!-- wp:paragraph {"className": "mc-issue"} -->
<p class="mc-issue"><?php echo esc_html( michishirube_consulting_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mc-eyebrow"} -->
<p class="mc-eyebrow"><?php echo esc_html( michishirube_consulting_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mc-hero__title"} -->
<h1 class="wp-block-heading mc-hero__title"><?php echo esc_html( michishirube_consulting_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-hero__lead"} -->
<p class="mc-hero__lead"><?php echo esc_html( michishirube_consulting_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mc-hero__cta"} -->
<div class="wp-block-buttons mc-hero__cta"><!-- wp:button {"className": "mc-book"} -->
<div class="wp-block-button mc-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( michishirube_consulting_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( michishirube_consulting_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "mc-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-toc"><!-- wp:paragraph {"className": "mc-toc__label"} -->
<p class="mc-toc__label"><?php echo esc_html( michishirube_consulting_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "mc-toc__list"} -->
<ol class="wp-block-list mc-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-hero__bowl"} -->
<figure class="wp-block-image size-full mc-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/consultant-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== michishirube_consulting_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "mc-tate"} -->
<p class="mc-tate"><?php echo esc_html( michishirube_consulting_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
