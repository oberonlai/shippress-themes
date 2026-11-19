<?php
/**
 * Title: Home: caption-strip hero
 * Slug: shitsurae-interiors/front-hero
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Full-bleed high-key room photograph that cross-fades through three finished projects (parallax layer), with a white caption strip under it: two-line descriptor left, project name and loop ring right.
 */
?>
<!-- wp:group {"tagName":"section","className":"si-hero","layout":{"type":"default"}} -->
<section class="wp-block-group si-hero"><!-- wp:group {"className":"si-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__photo sp-parallax"><!-- wp:group {"className":"si-hero__layer sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group si-hero__layer sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"si-slide si-slide--1"} -->
<figure class="wp-block-image size-full si-slide si-slide--1"><img src="<?php echo shitsurae_interiors_img( 'p01-marlow-living.webp' ); ?>" alt="<?php echo shitsurae_interiors_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="wp-block-image si-slide si-slide--2" aria-hidden="true"><img src="<?php echo shitsurae_interiors_img( 'p02-fenn-bakery.webp' ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="wp-block-image si-slide si-slide--3" aria-hidden="true"><img src="<?php echo shitsurae_interiors_img( 'p03-hollin-bedroom.webp' ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"si-strip","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip"><!-- wp:heading {"level":1,"className":"si-strip__desc"} -->
<h1 class="wp-block-heading si-strip__desc"><?php echo shitsurae_interiors_lines( 'hero_desc' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"si-strip__right","layout":{"type":"default"}} -->
<div class="wp-block-group si-strip__right"><!-- wp:group {"className":"si-names","layout":{"type":"default"}} -->
<div class="wp-block-group si-names"><!-- wp:paragraph {"className":"si-names__n si-names__n--1"} -->
<p class="si-names__n si-names__n--1"><?php echo esc_html( shitsurae_interiors_t( 'hero_name_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-names__n si-names__n--2"} -->
<p class="si-names__n si-names__n--2" aria-hidden="true"><?php echo esc_html( shitsurae_interiors_t( 'hero_name_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"si-names__n si-names__n--3"} -->
<p class="si-names__n si-names__n--3" aria-hidden="true"><?php echo esc_html( shitsurae_interiors_t( 'hero_name_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<?php echo shitsurae_interiors_icon( 'ring', 'si-ring' ); ?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
