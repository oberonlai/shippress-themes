<?php
/**
 * Title: Page: About the school
 * Slug: kotoba-language/page-about
 * Categories: kotoba-language
 * Description: Cropped wordmark, parallax classroom band, arc-flanked circular photograph.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"kl-wrap kl-lede-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap kl-lede-wrap"><!-- wp:paragraph {"className":"kl-lede"} -->
<p class="kl-lede"><?php echo esc_html( kotoba_language_t( 'about_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="kl-word kl-word--page" aria-hidden="true"><p class="kl-word__t">Kotoba.</p></div>
<!-- /wp:html -->

<!-- wp:group {"className":"kl-band sp-parallax sp-reveal sp-reveal--wipe","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kl-band sp-parallax sp-reveal sp-reveal--wipe"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-band__img"} -->
<figure class="wp-block-image size-full kl-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s1.webp' ) ); ?>" alt="<?php echo esc_attr( kotoba_language_t( 'alt_s1' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-prose-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-prose-sec"><!-- wp:group {"className":"kl-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-narrow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'about_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'about_b1_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'about_b1_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-quote","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-quote"><!-- wp:group {"className":"kl-flank kl-flank--circle kl-flank--text","layout":{"type":"default"}} -->
<div class="wp-block-group kl-flank kl-flank--circle kl-flank--text"><!-- wp:html -->
<?php echo kotoba_language_arc( 'l' ); // phpcs:ignore ?>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kl-circle"} -->
<figure class="wp-block-image size-full kl-circle"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s2.webp' ) ); ?>" alt="<?php echo esc_attr( kotoba_language_t( 'alt_s2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":2,"className":"kl-pull kl-pull--side"} -->
<h2 class="wp-block-heading kl-pull kl-pull--side"><?php echo esc_html( kotoba_language_t( 'about_pull' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo kotoba_language_arc( 'r' ); // phpcs:ignore ?>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"kl-sec kl-prose-sec","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-prose-sec"><!-- wp:group {"className":"kl-narrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kl-narrow sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"kl-h2"} -->
<h2 class="wp-block-heading kl-h2"><?php echo esc_html( kotoba_language_t( 'about_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'about_b2_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kl-body"} -->
<p class="kl-body"><?php echo esc_html( kotoba_language_t( 'about_b2_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"kl-wrap kl-stubclose","layout":{"type":"default"}} -->
<div class="wp-block-group kl-wrap kl-stubclose"><!-- wp:buttons {"className":"kl-pill-btn-wrap"} -->
<div class="wp-block-buttons kl-pill-btn-wrap"><!-- wp:button {"className":"kl-pill-btn"} -->
<div class="wp-block-button kl-pill-btn"><a class="wp-block-button__link wp-element-button" href="/enquiry/"><?php echo esc_html( kotoba_language_t( 'cta_enquire' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->