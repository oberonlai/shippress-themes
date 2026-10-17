<?php
/**
 * Title: Home: product grid on a tsutsuji field
 * Slug: yukimi-kakigori/home-hero
 * Categories: yukimi-kakigori
 * Keywords: kakigori, shaved ice, dessert
 * Viewport Width: 1440
 * Description: A full-width tsutsuji pink field: the parlour line, title, lead, buttons and today's ice on the left; four paper-cut bowls as a taped 2 x 2 grid on the right, with the cut-out bowl standing in front of the grid and breaking over the hero bottom edge.
 */
$yk_bowls = array(
	array( 'bowl-ichigo', 'alt_lattice', 'r1_t' ),
	array( 'bowl-matcha', 'alt_bath', 'r2_t' ),
	array( 'bowl-momo', 'alt_tatami', 'r3_t' ),
	array( 'bowl-yuzu', 'alt_kitchen', 'r4_t' ),
);
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull yk-hero"><!-- wp:group {"className": "yk-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-hero__text"><!-- wp:paragraph {"className": "yk-issue"} -->
<p class="yk-issue"><?php echo esc_html( yukimi_kakigori_t( 'issue' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "yk-eyebrow"} -->
<p class="yk-eyebrow"><?php echo esc_html( yukimi_kakigori_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "yk-hero__title"} -->
<h1 class="wp-block-heading yk-hero__title"><?php echo esc_html( yukimi_kakigori_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "yk-hero__lead"} -->
<p class="yk-hero__lead"><?php echo esc_html( yukimi_kakigori_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "yk-hero__cta"} -->
<div class="wp-block-buttons yk-hero__cta"><!-- wp:button {"className": "yk-book"} -->
<div class="wp-block-button yk-book"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( yukimi_kakigori_t( 'book' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/ices/"><?php echo esc_html( yukimi_kakigori_t( 'see_house' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className": "yk-toc", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-toc"><!-- wp:paragraph {"className": "yk-toc__label"} -->
<p class="yk-toc__label"><?php echo esc_html( yukimi_kakigori_t( 'toc_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered": true, "className": "yk-toc__list"} -->
<ol class="wp-block-list yk-toc__list"><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'toc_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'toc_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( yukimi_kakigori_t( 'toc_3' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "yk-hero__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-hero__grid"><?php foreach ( $yk_bowls as $yk_b ) : ?><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-piece"} -->
<figure class="wp-block-image size-full yk-piece"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $yk_b[0] . '.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( $yk_b[1] ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( yukimi_kakigori_t( $yk_b[2] ) ); ?></figcaption></figure>
<!-- /wp:image -->

<?php endforeach; ?><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-hero__bowl"} -->
<figure class="wp-block-image size-full yk-hero__bowl"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_street' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<?php if ( '' !== yukimi_kakigori_t( 'hero_tate' ) ) : ?>
<!-- wp:paragraph {"className": "yk-tate"} -->
<p class="yk-tate"><?php echo esc_html( yukimi_kakigori_t( 'hero_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></section>
<!-- /wp:group -->
