<?php
/**
 * Title: Hero: journal
 * Slug: shitsurae-interiors/hero-journal
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Caption-strip hero for the journal list.
 */
?>
<!-- wp:group {"tagName":"section","className":"si-hero si-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group si-hero si-hero--inner"><!-- wp:group {"className":"si-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__photo sp-parallax"><!-- wp:group {"className":"si-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-slide si-slide--1"} -->
<figure class="wp-block-image size-full si-slide si-slide--1"><img src="<?php echo shitsurae_interiors_img( 'p11-hollin-living.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-strip","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip"><!-- wp:paragraph {"className":"si-strip__desc"} -->
<p class="si-strip__desc"><?php echo shitsurae_interiors_lines( 'journal_desc' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"si-strip__right","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip__right"><!-- wp:heading {"level":1,"className":"si-strip__title"} -->
<h1 class="wp-block-heading si-strip__title"><?php echo esc_html( shitsurae_interiors_t( 'nav_journal' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'ring', 'si-ring' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
