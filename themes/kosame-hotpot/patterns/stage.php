<?php
/**
 * Title: Photo stage: five slides, dots and two vertical phrases
 * Slug: kosame-hotpot/stage
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Description: The sticky left half of the page: five low-key photographs cross-fading on a timer (CSS only), five dots and two vertical phrases.
 */
?>
<!-- wp:group {"className":"ks-stage","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage"><!-- wp:group {"className":"ks-stage__slides","layout":{"type":"default"}} -->
<div class="wp-block-group ks-stage__slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--1"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--1"><img src="<?php echo kosame_hotpot_img( 'kv-split-pot.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--2"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--2"><img src="<?php echo kosame_hotpot_img( 'beef-plate.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--3"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--3"><img src="<?php echo kosame_hotpot_img( 'ladle-pour.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--4"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--4"><img src="<?php echo kosame_hotpot_img( 'vegetable-platter.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-stage__slide ks-stage__slide--5"} -->
<figure class="wp-block-image size-full ks-stage__slide ks-stage__slide--5"><img src="<?php echo kosame_hotpot_img( 'room-four.webp' ); ?>" alt="<?php echo kosame_hotpot_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ks-stage__scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:html -->
<div class="ks-stage__dots" aria-hidden="true"><span class="ks-dot ks-dot--1"></span><span class="ks-dot ks-dot--2"></span><span class="ks-dot ks-dot--3"></span><span class="ks-dot ks-dot--4"></span><span class="ks-dot ks-dot--5"></span></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--a"} -->
<p class="ks-stage__phrase ks-stage__phrase--a"><?php echo esc_html( kosame_hotpot_t( 'phrase_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-stage__phrase ks-stage__phrase--b"} -->
<p class="ks-stage__phrase ks-stage__phrase--b"><?php echo esc_html( kosame_hotpot_t( 'phrase_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
