<?php
/**
 * Title: Home: aisle band with docked panel
 * Slug: shoko-archives/front-band
 * Categories: shoko-archives
 * Viewport Width: 1440
 * Description: A full-bleed 560px photograph that drifts slowly as you scroll (parallax) with a white panel docked over its lower edge: heading, paragraph and three counted figures.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sa-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sa-band"><!-- wp:group {"className":"sa-band__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sa-band__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sa-band__img"} -->
<figure class="wp-block-image size-full sa-band__img"><img src="<?php echo shoko_archives_img( 'band-aisles' ); ?>" alt="<?php echo esc_attr( shoko_archives_t( 'alt_band-aisles' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-band__panel","layout":{"type":"default"}} -->
<div class="wp-block-group sa-band__panel"><!-- wp:heading {"className":"sa-band__h"} -->
<h2 class="wp-block-heading sa-band__h"><?php echo esc_html( shoko_archives_t( 'bd_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sa-band__p"} -->
<p class="sa-band__p"><?php echo esc_html( shoko_archives_t( 'bd_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sa-facts","layout":{"type":"default"}} -->
<div class="wp-block-group sa-facts"><!-- wp:group {"className":"sa-fact","layout":{"type":"default"}} -->
<div class="wp-block-group sa-fact"><!-- wp:paragraph {"className":"sa-fig sp-reveal sp-count"} -->
<p class="sa-fig sp-reveal sp-count">14 <small><?php echo esc_html( shoko_archives_t( 'bd_u1' ) ); ?></small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-fact__s"} -->
<p class="sa-fact__s"><?php echo esc_html( shoko_archives_t( 'bd_s1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-fact","layout":{"type":"default"}} -->
<div class="wp-block-group sa-fact"><!-- wp:paragraph {"className":"sa-fig sp-reveal sp-count"} -->
<p class="sa-fig sp-reveal sp-count">38,000 <small><?php echo esc_html( shoko_archives_t( 'bd_u2' ) ); ?></small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-fact__s"} -->
<p class="sa-fact__s"><?php echo esc_html( shoko_archives_t( 'bd_s2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-fact","layout":{"type":"default"}} -->
<div class="wp-block-group sa-fact"><!-- wp:paragraph {"className":"sa-fig sp-reveal sp-count"} -->
<p class="sa-fig sp-reveal sp-count">1 <small><?php echo esc_html( shoko_archives_t( 'bd_u3' ) ); ?></small></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sa-fact__s"} -->
<p class="sa-fact__s"><?php echo esc_html( shoko_archives_t( 'bd_s3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sa-more sa-more--lg"} -->
<p class="sa-more sa-more--lg"><a href="/facility/"><?php echo esc_html( shoko_archives_t( 'bd_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
