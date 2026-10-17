<?php
/**
 * Title: Home: centred giant type on a sumire field
 * Slug: shirayami-butoh/home-hero
 * Categories: shirayami-butoh
 * Keywords: butoh, dance, performance
 * Viewport Width: 1440
 * Description: A full-width sumire violet field with the company line, the title in giant centred type, the cut-out dancer standing in front of the letters and breaking out over the hero bottom edge, then the lead, the buttons and this season in one centred column.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull sb-hero"><!-- wp:paragraph {"className": "sb-issue"} -->
<p class="sb-issue"><?php echo esc_html( shirayami_butoh_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sb-hero__title"} -->
<h1 class="wp-block-heading sb-hero__title"><?php echo esc_html( shirayami_butoh_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-hero__dancer"} -->
<figure class="wp-block-image size-full sb-hero__dancer"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dancer-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sb-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-hero__text"><!-- wp:paragraph {"className": "sb-eyebrow"} -->
<p class="sb-eyebrow"><?php echo esc_html( shirayami_butoh_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sb-hero__lead"} -->
<p class="sb-hero__lead"><?php echo esc_html( shirayami_butoh_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "sb-hero__cta"} -->
<div class="wp-block-buttons sb-hero__cta"><!-- wp:button {"className": "sb-book"} -->
<div class="wp-block-button sb-book"><a class="wp-block-button__link wp-element-button" href="/seats/"><?php echo esc_html( shirayami_butoh_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/repertoire/"><?php echo esc_html( shirayami_butoh_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "sb-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-toc"><!-- wp:paragraph {"className": "sb-toc__label"} -->
<p class="sb-toc__label"><?php echo esc_html( shirayami_butoh_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "sb-toc__list"} -->
<ol class="wp-block-list sb-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( shirayami_butoh_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php if ( '' !== shirayami_butoh_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sb-tate"} -->
<p class="sb-tate"><?php echo esc_html( shirayami_butoh_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
