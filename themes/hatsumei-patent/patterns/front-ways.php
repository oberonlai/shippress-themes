<?php
/**
 * Title: Home: how we work as a shape strip
 * Slug: hatsumei-patent/front-ways
 * Categories: hatsumei-patent
 * Keywords: how we work, principles, strip
 * Viewport Width: 1440
 * Description: A pale band with a heading and lead, then one row that bleeds off both edges: chamfered photographs alternating with white notes in slanted, house and capsule shapes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-ways","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-ways"><!-- wp:group {"className":"hp-ways__head","layout":{"type":"default"}} -->
<div class="wp-block-group hp-ways__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ways_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ways_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hp-ways__lead"} -->
<p class="hp-ways__lead"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ways_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-strip","layout":{"type":"default"}} -->
<div class="wp-block-group hp-strip"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-strip__photo hp-strip__photo--1"} -->
<figure class="wp-block-image size-full hp-strip__photo hp-strip__photo--1"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/whiteboard.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ways_img1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-strip__note hp-strip__note--slant"} -->
<p class="hp-strip__note hp-strip__note--slant"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ways_note1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-strip__photo hp-strip__photo--2"} -->
<figure class="wp-block-image size-full hp-strip__photo hp-strip__photo--2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ways_img2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-strip__note hp-strip__note--house"} -->
<p class="hp-strip__note hp-strip__note--house"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ways_note2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-strip__photo hp-strip__photo--3"} -->
<figure class="wp-block-image size-full hp-strip__photo hp-strip__photo--3"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/prototype-macro.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ways_img3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-strip__note hp-strip__note--capsule"} -->
<p class="hp-strip__note hp-strip__note--capsule"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ways_note3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-strip__photo hp-strip__photo--4"} -->
<figure class="wp-block-image size-full hp-strip__photo hp-strip__photo--4"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/trademark.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ways_img4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-strip__note hp-strip__note--slant2"} -->
<p class="hp-strip__note hp-strip__note--slant2"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ways_note4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
