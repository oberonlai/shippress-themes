<?php
/**
 * Title: Home: the chair breaking out of the window frame
 * Slug: kamisori-barber/home-hero
 * Categories: kamisori-barber
 * Keywords: barber, barbershop, shave
 * Viewport Width: 1440
 * Description: A single column on the kyo-murasaki field: the issue line, title, lead and buttons, then a paper-cut picture of the shop in a white window frame; the cut-out barber chair breaks out of the frame and over the hero bottom edge, with today's three chairs listed under the frame.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull kb-hero"><!-- wp:group {"className": "kb-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-hero__text"><!-- wp:paragraph {"className": "kb-issue"} -->
<p class="kb-issue"><?php echo esc_html( kamisori_barber_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kb-eyebrow"} -->
<p class="kb-eyebrow"><?php echo esc_html( kamisori_barber_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kb-hero__title"} -->
<h1 class="wp-block-heading kb-hero__title"><?php echo esc_html( kamisori_barber_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-hero__lead"} -->
<p class="kb-hero__lead"><?php echo esc_html( kamisori_barber_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "kb-hero__cta"} -->
<div class="wp-block-buttons kb-hero__cta"><!-- wp:button {"className": "kb-book"} -->
<div class="wp-block-button kb-book"><a class="wp-block-button__link wp-element-button" href="/booking/"><?php echo esc_html( kamisori_barber_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( kamisori_barber_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className": "kb-hero__frame", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-hero__frame"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-hero__window"} -->
<figure class="wp-block-image size-full kb-hero__window"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-room.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kb-hero__chair"} -->
<figure class="wp-block-image size-full kb-hero__chair"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/chair-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( kamisori_barber_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kb-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group kb-toc"><!-- wp:paragraph {"className": "kb-toc__label"} -->
<p class="kb-toc__label"><?php echo esc_html( kamisori_barber_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "kb-toc__list"} -->
<ol class="wp-block-list kb-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kamisori_barber_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->

<?php if ( '' !== kamisori_barber_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kb-tate"} -->
<p class="kb-tate"><?php echo esc_html( kamisori_barber_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
