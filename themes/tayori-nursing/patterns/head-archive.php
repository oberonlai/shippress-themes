<?php
/**
 * Title: Head: archive
 * Slug: tayori-nursing/head-archive
 * Categories: tayori-nursing
 * Keywords: nursing, home visit
 * Viewport Width: 1440
 * Inserter: no
 * Description: Small pebble head with the archive title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tn-phead"><!-- wp:group {"className":"tn-phead__field","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__field"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--a tn-ph1 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--a tn-ph1 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p15-office.webp' ) ); ?>" alt="Small single-storey office on a tree-lined street with a bicycle parked outside."/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-pebble tn-pebble--b tn-ph2 sp-parallax"} -->
<figure class="wp-block-image size-full tn-pebble tn-pebble--b tn-ph2 sp-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-laugh.webp' ) ); ?>" alt="Older man laughs with a nurse as their hands rest clasped together."/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"tn-doodle tn-phd"} -->
<figure class="wp-block-image size-full tn-doodle tn-phd"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/d1-nurse.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tn-phead__inner tn-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tn-phead__inner tn-wrap"><!-- wp:paragraph {"className":"tn-label"} -->
<p class="tn-label">Notes and news</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","className":"tn-phead__title"} /--></div>
<!-- /wp:group -->

<!-- wp:html -->
<svg class="tn-phead__wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0 72C200 30 440 10 700 44S1120 108 1440 26V120H0Z"/></svg>
<!-- /wp:html --></section>
<!-- /wp:group -->
