<?php
/**
 * Title: Home: a week in four frames
 * Slug: nagare-workation/front-strip
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: Heading with a label pair, two narrative paragraphs and a sideways-scrolling strip of four photographs, Monday to Thursday, 0.9:1, no radius.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground nw-weekstrip","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground nw-weekstrip"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:group {"className":"nw-open sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group nw-open sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"nw-h2"} -->
<h2 class="wp-block-heading nw-h2"><?php echo esc_html( nagare_workation_t( 'strip_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"nw-labelpair","layout":{"type":"default"}} -->
<div class="wp-block-group nw-labelpair"><!-- wp:paragraph {"className":"nw-label"} -->
<p class="nw-label"><?php echo esc_html( nagare_workation_t( 'strip_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-sublabel"} -->
<p class="nw-sublabel"><?php echo esc_html( nagare_workation_t( 'strip_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-cols nw-cols--text","layout":{"type":"default"}} -->
<div class="wp-block-group nw-cols nw-cols--text"><!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'strip_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'strip_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-strip","layout":{"type":"default"}} -->
<div class="wp-block-group nw-strip"><!-- wp:group {"className":"nw-strip__track","layout":{"type":"default"}} -->
<div class="wp-block-group nw-strip__track"><!-- wp:group {"className":"nw-frame","layout":{"type":"default"}} -->
<div class="wp-block-group nw-frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph nw-frame__img"} -->
<figure class="wp-block-image size-full nw-ph nw-frame__img"><img src="<?php echo nagare_workation_img( 'p05-room-arrival.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"nw-frame__cap"} -->
<p class="nw-frame__cap"><strong><?php echo esc_html( nagare_workation_t( 'fr1_d' ) ); ?></strong> <?php echo esc_html( nagare_workation_t( 'fr1_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-frame","layout":{"type":"default"}} -->
<div class="wp-block-group nw-frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph nw-frame__img"} -->
<figure class="wp-block-image size-full nw-ph nw-frame__img"><img src="<?php echo nagare_workation_img( 'p06-dock-swim.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"nw-frame__cap"} -->
<p class="nw-frame__cap"><strong><?php echo esc_html( nagare_workation_t( 'fr2_d' ) ); ?></strong> <?php echo esc_html( nagare_workation_t( 'fr2_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-frame","layout":{"type":"default"}} -->
<div class="wp-block-group nw-frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph nw-frame__img"} -->
<figure class="wp-block-image size-full nw-ph nw-frame__img"><img src="<?php echo nagare_workation_img( 'p07-call-booth.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"nw-frame__cap"} -->
<p class="nw-frame__cap"><strong><?php echo esc_html( nagare_workation_t( 'fr3_d' ) ); ?></strong> <?php echo esc_html( nagare_workation_t( 'fr3_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-frame","layout":{"type":"default"}} -->
<div class="wp-block-group nw-frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph nw-frame__img"} -->
<figure class="wp-block-image size-full nw-ph nw-frame__img"><img src="<?php echo nagare_workation_img( 'p08-long-table-dinner.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"nw-frame__cap"} -->
<p class="nw-frame__cap"><strong><?php echo esc_html( nagare_workation_t( 'fr4_d' ) ); ?></strong> <?php echo esc_html( nagare_workation_t( 'fr4_t' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
