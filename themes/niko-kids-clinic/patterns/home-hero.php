<?php
/**
 * Title: Home: diagonal split with a photo collage
 * Slug: niko-kids-clinic/home-hero
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Description: Text on the pale aqua field on the left; on the right the waiting-room photograph cut on a diagonal, with a small tilted print of toy blocks and the cut-out teddy bear and stethoscope breaking across the diagonal seam and the hero bottom edge.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull nk-hero"><!-- wp:group {"className": "nk-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-hero__text"><!-- wp:paragraph {"className": "nk-issue"} -->
<p class="nk-issue"><?php echo esc_html( niko_kids_clinic_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( niko_kids_clinic_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "nk-hero__title"} -->
<h1 class="wp-block-heading nk-hero__title"><?php echo esc_html( niko_kids_clinic_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-hero__lead"} -->
<p class="nk-hero__lead"><?php echo esc_html( niko_kids_clinic_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "nk-hero__cta"} -->
<div class="wp-block-buttons nk-hero__cta"><!-- wp:button {"className": "nk-book"} -->
<div class="wp-block-button nk-book"><a class="wp-block-button__link wp-element-button" href="/booking/"><?php echo esc_html( niko_kids_clinic_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/care/"><?php echo esc_html( niko_kids_clinic_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "nk-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-toc"><!-- wp:paragraph {"className": "nk-toc__label"} -->
<p class="nk-toc__label"><?php echo esc_html( niko_kids_clinic_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "nk-toc__list"} -->
<ol class="wp-block-list nk-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-hero__photo"} -->
<figure class="wp-block-image size-full nk-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waiting.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_life' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-hero__print"} -->
<figure class="wp-block-image size-full nk-hero__print"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/blocks.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-hero__scope"} -->
<figure class="wp-block-image size-full nk-hero__scope"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/scope-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_lamp' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-hero__bowl"} -->
<figure class="wp-block-image size-full nk-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bear-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image -->

<?php if ( '' !== niko_kids_clinic_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "nk-tate"} -->
<p class="nk-tate"><?php echo esc_html( niko_kids_clinic_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
