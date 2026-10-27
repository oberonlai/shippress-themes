<?php
/**
 * Title: Home: full-bleed venue with parallax
 * Slug: renkei-forum/front-venue
 * Categories: renkei-forum
 * Viewport Width: 1440
 * Description: A full-width photograph that moves slowly inside its frame, with a fixed info panel.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"venue","align":"full","className":"rf-venue sp-parallax","layout":{"type":"default"}} -->
<section id="venue" class="wp-block-group alignfull rf-venue sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/venue-foyer.webp' ) ); ?>" alt="<?php echo esc_attr( rf_t( 'Sunlit foyer of a converted wharf hall with empty linen covered supplier tables.' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"rf-venue__panel","layout":{"type":"default"}} -->
<div class="wp-block-group rf-venue__panel"><!-- wp:paragraph {"className":"rf-label"} -->
<p class="rf-label"><?php echo wp_kses_post( rf_t( 'kbe993d10' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"rf-h2 rf-h2--s"} -->
<h2 class="wp-block-heading rf-h2 rf-h2--s"><span class="rf-line"><mark class="rf-bar"><?php echo wp_kses_post( rf_t( 'kd9312908' ) ); ?></mark></span><span class="rf-line"><mark class="rf-bar"><?php echo wp_kses_post( rf_t( 'kbaaba7e2' ) ); ?></mark></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( rf_t( 'k55be1104' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul><li><?php echo wp_kses_post( rf_t( 'k4840062d' ) ); ?></li><li><?php echo wp_kses_post( rf_t( 'k06e66a45' ) ); ?></li><li><?php echo wp_kses_post( rf_t( 'k1141cc3f' ) ); ?></li><li><?php echo wp_kses_post( rf_t( 'k79ecd9e3' ) ); ?></li></ul>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
